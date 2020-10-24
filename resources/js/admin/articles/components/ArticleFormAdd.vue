<template>
    <div class="component-wrap">
        <!-- form -->
        <v-card>
            <v-form ref="articleFormUpload" lazy-validation>
                <v-container grid-list-md>
                    <v-layout row wrap>
                        <v-flex xs12 sm8>
                            <v-select
                                    label="Upload To Article Group"
                                    v-bind:items="articleGroups"
                                    v-model="uploadTo"
                                    item-text="name"
                                    item-value="id"
                            ></v-select>
                        </v-flex>
                        <v-flex xs12>
                            <div class="dropzone" id="articleupload"></div>
                        </v-flex>
                    </v-layout>
                </v-container>
                <v-flex xs12>
                    <v-btn @click="save()" :disabled="!valid" color="primary" dark>Save</v-btn>
                </v-flex>
            </v-form>
        </v-card>
        <!-- /form -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                dropzone: null,
                articleGroups: [],
                uploadTo: '',
                addedArticles: []
            }
        },
        mounted() {
            console.log('pages.articles.components.ArticleUpload.vue');

            const self = this;

            self.loadArticleGroups(()=>{});
            self.initDropzone();

            self.$eventBus.$on(['FILE_GROUP_ADDED'],()=>{
                self.loadArticleGroups(()=>{});
            });
        },
        methods: {
            save() {///@todo old clear() method
                return;
                const self = this;

                _.each(self.addedArticles,f=>{
                    self.dropzone.removeArticle(f);
                });

                self.addedArticles = [];
            },
            upload() {

                console.log('here')
                const self = this;

                self.dropzone.processQueue();
            },
            initDropzone() {

                const self = this;

                Dropzone.autoDiscover = false;

                self.dropzone = new Dropzone("#articleupload", {
                    url:'/admin/articles',
                    paramName: "article", // The name that will be used to transfer the article
                    maxArticlesize: 50, // 50MB
                    uploadMultiple: true,
                    //acceptedArticles: 'image/*',
                    headers: {'X-CSRF-TOKEN' : _token},
                    autoProcessQueue: true,
                    init: function() {
                        // initial hook
                    },
                    success: function(article, response){
                        // success hook
                    }
                });

                self.dropzone.on("addedarticle", function(article) {
                    if(!self.uploadTo) {
                        self.$store.commit('showSnackbar',{
                            message: "Please choose article group to upload the article(s)",
                            color: 'error',
                            duration: 3000
                        });
                        self.dropzone.removeArticle(article);
                    } else {
                        self.addedArticles.push(article);
                    }
                });

                self.dropzone.on('sending',(article,xhr,formData)=> {
                    formData.append('article_group_id',self.uploadTo);
                });

                self.dropzone.on("complete", function(article) {
                    self.$store.commit('showSnackbar',{
                        message: "Article(s) uploaded successfully.",
                        color: 'success',
                        duration: 3000
                    });

                    self.$eventBus.$emit('FILE_UPLOADED');
                });
            },
            loadArticleGroups(cb) {

                const self = this;

                let params = {
                    paginate: 'no'
                };

                axios.get('/admin/article-groups',{params: params}).then(function(response) {
                    self.articleGroups = response.data.data;
                    cb();
                });
            }
        }
    }
</script>
<style scoped>
    #articleupload {
        min-height: 400px;
        background: grey;
        border: 1px dashed #eaeaea;
    }
    .dropzone .dz-preview.dz-image-preview {
        background: none;
    }
</style>