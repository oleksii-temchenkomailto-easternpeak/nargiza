<template>
    <div class="component-wrap">
        <!-- articlers -->
        <v-card>
            <div class="d-flex flex-column">
                <div class="flex-grow-1 pa-2">
<!--                    <v-text-field prepend-icon="search" label="Filter By Name or Extension" v-model="filters.name"></v-text-field>-->
                </div>
                <div class="flex-grow-1 pa-2">
                    Show Only:
                </div>
                <div class="flex-grow-1 pa-2">
                    <span v-for="(group,i) in filters.articleGroupsHolder" :key="i">
                        <v-checkbox v-bind:label="group.name" v-model="filters.articleGroupId[group.id]"></v-checkbox>
                    </span>
                </div>
            </div>
        </v-card>

        <!-- groups table -->
        <v-data-table
                v-bind:headers="headers"
                :options.sync="pagination"
                :items="items"
                :server-items-length="totalItems"
                class="elevation-1">
            <template v-slot:body="{items}">
                <tbody>
                <tr v-for="item in items" :key="item.id">
                    <td>
                        <v-btn @click="showDialog('article_show',item)" icon small>
                            <v-icon class="blue--text">mdi-magnify</v-icon>
                        </v-btn>
                        <v-btn @click="trash(props.item)" icon small>
                            <v-icon class="red--text">mdi-delete</v-icon>
                        </v-btn>
                    </td>
                    <td>
                        <v-avatar
                                tile
                                :size="'50px'"
                                class="grey lighten-4">
                            <img :src="getFullUrl(item,50,'fit')"/>
                        </v-avatar>
                    </td>
                    <td>{{ item.name }}</td>
                    <td>{{ $appFormatters.formatByteToMB(item.size).toString() + ' MB' }}</td>
                    <td>{{ item.group.name }}</td>
                    <td>{{ $appFormatters.formatDate(item.created_at) }}</td>
                </tr>
                </tbody>
            </template>
        </v-data-table>
        <!-- /groups table -->

        <!-- view article dialog -->
        <v-dialog v-model="dialogs.view.show" fullscreen :laze="false" transition="dialog-bottom-transition" :overlay=false>
            <v-card>
                <v-toolbar class="primary">
                    <v-btn icon @click.native="dialogs.view.show = false" dark>
                        <v-icon>close</v-icon>
                    </v-btn>
                    <v-toolbar-title class="white--text">{{dialogs.view.article.name}}</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-toolbar-items>
                        <v-btn dark text @click.native="downloadArticle(dialogs.view.article)">
                            Download
                            <v-icon right dark>article_download</v-icon></v-btn>
                    </v-toolbar-items>
                    <v-toolbar-items>
                        <v-btn dark text @click.native="trash(dialogs.view.article)">
                            Delete
                            <v-icon right dark>delete</v-icon></v-btn>
                    </v-toolbar-items>
                </v-toolbar>
                <v-card-text>
                    <div class="article_view_popup">
                        <div class="article_view_popup_link">
                            <v-text-field text disabled :value="getFullUrl(dialogs.view.article)"></v-text-field>
                        </div>
                        <img :src="getFullUrl(dialogs.view.article)"/>
                    </div>
                </v-card-text>
            </v-card>
        </v-dialog>

    </div>
</template>

<script>
    export default {
        components: {},
        data() {
            return {
                headers: [
                    { text: 'Action', value: false, align: 'left', sortable: false },
                    { text: 'Thumb', value: 'thumb', align: 'left', sortable: false },
                    { text: 'Name', value: 'name', align: 'left', sortable: false },
                    { text: 'Size', value: 'size', align: 'left', sortable: false },
                    { text: 'Found In', value: 'group', align: 'left', sortable: false },
                    { text: 'Date Created', value: 'created_at', align: 'left', sortable: false },
                ],
                items: [],
                totalItems: 0,
                pagination: {
                    rowsPerPage: 10
                },

                filters: {
                    name: '',
                    selectedGroupIds: '',
                    articleGroupId: [],
                    articleGroupsHolder: []
                },

                dialogs: {
                    view: {
                        article: {},
                        show: false
                    },
                }
            }
        },
        mounted() {
            console.log('pages.articles.components.ArticleLists.vue');

            const self = this;

            self.$eventBus.$on(['FILE_DELETED','FILE_UPLOADED'], function () {
                self.loadArticles(()=>{});
            });
        },
        watch: {
            'filters.articleGroupId':_.debounce(function(v) {

                let selected = [];

                _.each(v,(v,k)=>{
                    if(v) selected.push(k);
                });

                this.filters.selectedGroupIds = selected.join(',');
            },500),
            'filters.selectedGroupIds'(v) {
                this.loadArticles(()=>{});
            },
            'filters.name':_.debounce(function(v) {
                this.loadArticles(()=>{});
            },500),
            'pagination.page':function(){
                this.loadArticles(()=>{});
            },
            'pagination.rowsPerPage':function(){
                this.loadArticles(()=>{});
            },
        },
        methods: {
            getFullUrl(article, width, action) {

                let w = width || 4000;
                let act = action || 'resize';

                return LSK_APP.APP_URL +`/articles/`+article.id+`/preview?w=`+w+`&action=`+act;
            },
            downloadArticle(article) {
                window.open(LSK_APP.APP_URL + '/articles/'+article.id+'/download?article_token='+article.article_token);
            },
            showDialog(dialog, data) {

                const self = this;

                switch (dialog){
                    case 'article_show':
                        self.dialogs.view.article = data;
                        setTimeout(()=>{
                            self.dialogs.view.show = true;
                        },500);
                        break;
                }
            },
            trash(article) {
                const self = this;

                self.$store.commit('showDialog',{
                    type: "confirm",
                    title: "Confirm Deletion",
                    message: "Are you sure you want to delete this article?",
                    okCb: ()=>{

                        axios.delete('/admin/articles/' + article.id).then(function(response) {

                            self.$store.commit('showSnackbar',{
                                message: response.data.message,
                                color: 'success',
                                duration: 3000
                            });

                            self.$eventBus.$emit('FILE_DELETED');

                            // maybe the action took place from view article
                            // lets close it.
                            self.dialogs.view.show = false;

                        }).catch(function (error) {
                            if (error.response) {
                                self.$store.commit('showSnackbar',{
                                    message: error.response.data.message,
                                    color: 'error',
                                    duration: 3000
                                });
                            } else if (error.request) {
                                console.log(error.request);
                            } else {
                                console.log('Error', error.message);
                            }
                        });
                    },
                    cancelCb: ()=>{
                        console.log("CANCEL");
                    }
                });
            },
            loadArticleGroups(cb) {

                const self = this;

                let params = {
                    paginate: 'no'
                };

                axios.get('/admin/article-groups',{params: params}).then(function(response) {
                    self.filters.articleGroupsHolder = response.data.data;
                    cb();
                });
            },
            loadArticles(cb) {

                const self = this;

                let params = {
                    name: self.filters.name,
                    article_group_id: self.filters.selectedGroupIds,
                    page: self.pagination.page,
                    per_page: self.pagination.rowsPerPage
                };

                axios.get('/admin/articles',{params: params}).then(function(response) {
                    self.items = response.data.data.data;
                    self.totalItems = response.data.data.total;
                    self.pagination.totalItems = response.data.data.total;
                    (cb || Function)();
                });
            }
        }
    }
</script>

<style scoped>
    .article_view_popup {
        min-width: 500px;
        text-align: center;
    }
</style>