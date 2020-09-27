<template>
    <div class="component-wrap">

        <!-- search -->
        <v-card>
            <div class="d-flex flex-row">
                <div class="flex-grow-1">
                    <v-text-field prepend-icon="search" label="Filter By Name" v-model="filters.name"></v-text-field>
                </div>
                <div class="flex-grow-1 text-right">
                    <v-btn @click="showDialog('article_group_add')" dark class="primary lighten-1">
                        New Article Group
                        <v-icon right>mdi-add</v-icon>
                    </v-btn>
                </div>
            </div>
        </v-card>
        <!-- /search -->

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
                        <v-btn @click="showDialog('article_group_edit',item)" icon small>
                            <v-icon class="blue--text">edit</v-icon>
                        </v-btn>
                        <v-btn @click="trash(props.item)" icon small>
                            <v-icon class="red--text">delete</v-icon>
                        </v-btn>
                    </td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.description }}</td>
                    <td>{{ item.article_count }}</td>
                    <td>{{ $appFormatters.formatDate(item.created_at) }}</td>
                </tr>
                </tbody>
            </template>
        </v-data-table>

        <!-- add article group -->
        <v-dialog v-model="dialogs.add.show" fullscreen transition="dialog-bottom-transition" :overlay=false>
            <v-card>
                <v-toolbar class="primary">
                    <v-btn icon @click.native="dialogs.add.show = false">
                        <v-icon>close</v-icon>
                    </v-btn>
                    <v-toolbar-title>Create New Article Group</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-toolbar-items>
                        <v-btn text @click.native="dialogs.add.show = false">Done</v-btn>
                    </v-toolbar-items>
                </v-toolbar>
                <v-card-text>
                    <article-group-add></article-group-add>
                </v-card-text>
            </v-card>
        </v-dialog>

        <!-- edit article group -->
        <v-dialog v-model="dialogs.edit.show" fullscreen :laze="false" transition="dialog-bottom-transition" :overlay=false>
            <v-card>
                <v-toolbar class="primary">
                    <v-btn icon @click.native="dialogs.edit.show = false">
                        <v-icon>close</v-icon>
                    </v-btn>
                    <v-toolbar-title>Edit Article Group</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-toolbar-items>
                        <v-btn text @click.native="dialogs.edit.show = false">Done</v-btn>
                    </v-toolbar-items>
                </v-toolbar>
                <v-card-text>
                    <article-group-edit :propArticleGroupId="dialogs.edit.articleGroup.id"></article-group-edit>
                </v-card-text>
            </v-card>
        </v-dialog>

    </div>
</template>

<script>
    import ArticleGroupAdd from './ArticleGroupAdd.vue';
    import ArticleGroupEdit from './ArticleGroupEdit.vue';
    export default {
        components: {
            ArticleGroupAdd,
            ArticleGroupEdit
        },
        data() {
            return {
                headers: [
                    { text: 'Action', value: false, align: 'left', sortable: false },
                    { text: 'Group Name', value: 'name', align: 'left', sortable: false },
                    { text: 'Description', value: 'description', align: 'left', sortable: false },
                    { text: 'Total Articles', value: 'article_count', align: 'left', sortable: false },
                    { text: 'Date Created', value: 'created_at', align: 'left', sortable: false },
                ],
                items: [],
                totalItems: 0,
                pagination: {
                    rowsPerPage: 10
                },

                filters: {
                    name: '',
                },

                dialogs: {
                    edit: {
                        articleGroup: {},
                        show: false
                    },
                    add: {
                        show: false
                    }
                }
            }
        },
        mounted() {
            console.log('pages.articles.components.ArticleGroupLists.vue');

            const self = this;

            self.$eventBus.$on(['FILE_GROUP_ADDED','FILE_GROUP_UPDATED','FILE_GROUP_DELETED'],()=>{
                self.loadArticleGroups(()=>{});
            });
        },
        watch: {
            'filters.name':_.debounce(function(v) {
                this.loadArticleGroups(()=>{});
            },500),
            'pagination.page':function(){
                this.loadArticleGroups(()=>{});
            },
            'pagination.rowsPerPage':function(){
                this.loadArticleGroups(()=>{});
            },
        },
        methods: {
            trash(group) {
                const self = this;

                self.$store.commit('showDialog',{
                    type: "confirm",
                    title: "Confirm Deletion",
                    message: "Are you sure you want to delete this article group?",
                    okCb: ()=>{

                        axios.delete('/admin/article-groups/' + group.id).then(function(response) {

                            self.$store.commit('showSnackbar',{
                                message: response.data.message,
                                color: 'success',
                                duration: 3000
                            });

                            self.$eventBus.$emit('FILE_GROUP_DELETED');

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
            showDialog(dialog, data) {

                const self = this;

                switch (dialog){
                    case 'article_group_edit':
                        self.dialogs.edit.articleGroup = data;
                        setTimeout(()=>{
                            self.dialogs.edit.show = true;
                        },500);
                        break;
                    case 'article_group_add':
                        setTimeout(()=>{
                            self.dialogs.add.show = true;
                        },500);
                        break;
                }
            },
            loadArticleGroups(cb) {

                const self = this;

                let params = {
                    name: self.filters.name,
                    page: self.pagination.page,
                    per_page: self.pagination.rowsPerPage
                };

                axios.get('/admin/article-groups',{params: params}).then(function(response) {
                    self.items = response.data.data.data;
                    self.totalItems = response.data.data.total;
                    self.pagination.totalItems = response.data.data.total;
                    (cb || Function)();
                });
            }
        }
    }
</script>