<template>
    <article>
        <div v-if="!loading" class="filter">
            
            
            <div v-if="!loading" class="row result">

                        <!-- <transition-group  class="row"
                            @before-enter='beforeEnter'
                            @enter='enter'
                            @after-enter='afterEnter'
                            @before-leave='beforeLeave'
                            @leave='leave'
                            @after-leave='afterLeave'
                            
                            > -->
                
                        <div v-for="news in news" v-bind:key="news.id" class="col-sm">
                        
                                <div class="card mb-4 scene_element scene_element--fadeinup" style="width: 18rem;">
                                   
                                        <img v-if="news.photo != null" class="card-img-top" v-bind:src="'/images/news/' + news.photo.photo" alt="news photo"/>
                                  
                                  
                                        <div class="card-body">
                                            <h5 class="card-title">{{news.title}}</h5>
                                           
                                            <p class="card-text" style="min-height: 50px;">{{news.body | shorten}}</p>
                                            <a class="btn btn pridePurple" v-bind:href=" link + '/' + news.id">{{ $t("message.More") }}</a>
                                                
                                        </div>

                                    <div class="card-footer text-muted">
                                        <p class="float-left mb-0"><small class="text-muted">{{news.created.date | formatDate}}</small></p>
                                        <p v-if="lang == 'nl'" class="float-right mb-0"><small class="text-muted">{{news.category.nameNl}}</small></p>
                                        <p v-if="lang == 'fr'" class="float-right mb-0"><small class="text-muted">{{news.category.nameFr}}</small></p>
                                        <p v-if="lang == 'en'" class="float-right mb-0"><small class="text-muted">{{news.category.nameEn}}</small></p>
                                    </div>
                                    
                                </div>
                            </div>   
                        <!-- </transition-group>
            -->
            </div>
        </div>

        
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                    <a class="page-link pridePurpletxt" href="#" @click="fetchNews(pagination.prev_page_url)">Previous</a>
                </li>

                <li class="page-item disabled">
                    <a class="page-link text-dark" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a>
                </li>

                <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
                    <a class="page-link pridePurpletxt" href="#" @click="fetchNews(pagination.next_page_url)">Next</a>
                </li>
            </ul>
        </nav>

    </article>
</template>

<script>
    export default {
        props: ['fun'],
        data() {
            return {
                loading: false,
                news: [],
                category: [],
                search: '',
                news: {
                    id: '',
                    title: '',
                    body: '',
                    category: '',
                    photo: '',
                    photo_id: '',
                    created: ''
                },
                 category: {
                    id: '',
                    name: ''
                },
                news_id: '',
                photo_id: '',
                lang: document.documentElement.lang,
                pagination: {},
                link: window.location.href,
                edit: false
            };

        },
        created() {
            this.fetchNews();
            // this.fetchPhotos();
            //   this.idtoLink();
            // console.log(document.documentElement.lang);
            


        },

        methods: {
            fetchNews(page_url) {
                this.loading = true;
                let vm = this;
                page_url = page_url || 'api/news'

                fetch(page_url)
                    .then(res => res.json())
                    .then(res => {
                    
                            this.news = res.data;
                            this.loading = false;
                            // this.$options.newsLenght = res.data.length
                            // console.log("ok");
                        
                        
                        vm.makePagination(res.meta, res.links);
                        // this.news.body = res.data.body.substring(0,100);
                        // console.log(res.data.body);
                    })
                    
                    .catch(err => console.log(err));
            },


            makePagination(meta, links) {
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                };

            this.pagination = pagination;
            //   console.log(pagination);

            },


            
        },

        filters: {
        shorten: function (value) {
            if (!value) return ''
            value = value.toString()
            if(value.length > 200)
            {
                 return value.substring(0,200)+'...'
            }
           else{return value}
            },
            
            
            formatDate: function (value) {
                if (!value) return ''
                value = value.toString()
                return moment(String(value)).format('DD/MM/YYYY')
           
            },


        },

        // computed:{
        //     filteredNews: function(){
        //         // var self=this;
        //         var newsArr = Object.values(this.news);
        //         var newsArr = $.map(newsArr, function(el) { return el });
        //         return newsArr.filter(function(newsArr){
        //             console.log( newsArr);
        //             // return newsArr.title.toLowerCase().indexOf(self.search.toLowerCase())>=0;
        //             });
              
        //         console.log( newsArr);
        //         // return newsArr.filter((newsArr)=> {
        //         //     return newsArr.title.match(this.search);
        //         // })
        //     }
        // }

        // watch: {
        //     animating(val){
        //         if(!val && this.NewsToUpdate.length > 0){
        //             this.news = this.NewsToUpdate
        //             this.$options.newsLenght = this.news.length
        //             this.NewsToUpdate = []
        //         }
        //     }
        // },
        


    };
</script>