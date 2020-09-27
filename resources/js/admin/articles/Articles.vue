<template>
    <div class="page_wrap_vue">
        <v-tabs color="primary" v-model="active">

            <v-tab class="white--text" key="articles" href="#articles" ripple>
                Articles
            </v-tab>
            <v-tab class="white--text" key="manage-groups" href="#manage-groups" ripple>
                Manage Articles
            </v-tab>
            <v-tab class="white--text" key="upload" href="#upload" ripple>
                Upload
            </v-tab>

            <v-tab-item value="articles">
                <v-card flat>
                    <v-card-text>
                        <article-lists></article-lists>
                    </v-card-text>
                </v-card>
            </v-tab-item>
            <v-tab-item value="manage-groups">
                <v-card flat>
                    <v-card-text>
                        <article-group-lists></article-group-lists>
                    </v-card-text>
                </v-card>
            </v-tab-item>
            <v-tab-item value="upload">
                <v-card flat>
                    <v-card-text>
                        <article-upload></article-upload>
                    </v-card-text>
                </v-card>
            </v-tab-item>
        </v-tabs>
    </div>
</template>

<script>
    import ArticleGroupLists from './components/ArticleGroupLists.vue';
    import ArticleUpload from './components/ArticleUpload.vue';
    import ArticleLists from './components/ArticleLists.vue';
    export default {
        components: {
            ArticleUpload,
            ArticleGroupLists,
            ArticleLists
        },
        mounted() {
            console.log('pages.ArticleManager.vue');

            const self = this;

            self.$store.commit('setBreadcrumbs',[
                {label:'Articles',name:''}
            ]);
        },
        data() {
            return {
                active: 'articles'
            }
        },
        watch: {
            active(v) {
                console.log('active tab: ' + v);
            }
        },
        methods: {
        }
    }
</script>

<style scoped="">
    .finder_wrap {
        padding: 0 20px;
    }
</style>