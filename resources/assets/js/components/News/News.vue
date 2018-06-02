<template>
    <article>
      
       
        <div class="row">

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
                                <div v-for="photo in photo" v-bind:key="photo.id" v-if="news.photo_id === photo.id">
                                    <img class="card-img-top" v-bind:src="'/images/news/' + photo.photo" alt="news photo"/>
                                </div>
                            
                                    <div class="card-body">
                                        <h5 class="card-title">{{news.title}}</h5>
                                        <p class="card-text" style="min-height: 50px;">{{news.body | shorten}}</p>
                                        <a class="btn btn pridePurple" v-bind:href=" link + '/' + news.id">{{ $t("message.More") }}</a>
                                            
                                    </div>

                                <div class="card-footer text-muted">{{news.created.date | formatDate}}</div>
                        
                            </div>
                        </div>   
                    <!-- </transition-group>
         -->
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
        data() {
            return {
                news: [],
                photo: [],
                NewsToUpdate: [],
                news: {
                    id: '',
                    title: '',
                    body: '',
                    photo_id: '',
                    created: ''
                },

                photo: {
                    id: '',
                    photo: ''
                },
                news_id: '',
                photo_id: '',
                pagination: {},
                link: window.location.href,
                edit: false
            };

        },
        created() {
            this.fetchNews();
            this.fetchPhotos();
            //   this.idtoLink();
            // console.log(document.documentElement.lang);
            


        },

        methods: {
            fetchNews(page_url) {
                let vm = this;
                page_url = page_url || 'api/news'
                console.log(page_url);
                fetch(page_url)
                    .then(res => res.json())
                    .then(res => {
                    
                            this.news = res.data;
                            this.$options.newsLenght = res.data.length
                            console.log("ok");
                        
                        
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

            fetchPhotos() {
                fetch('api/photo')
                    .then(res => res.json())
                    .then(res => {
                        this.photo = res.data;



                    })

            },

            // transition
            // beforeEnter(el){
            //     el.style.opacity = 0

            //     if(!this.animating){
            //         this.animating = true
            //     }
            // },
            // enter(el, done){
            //     const delay = (el.dataset.index > 9 ? 9 : el.dataset.index)*100

            //     TweenLite.to(el, 0.5,{
            //         opacity: 1,
            //         oncomplete: done,
            //     })
            // },
            
            // afterEnter(el){
            //     if(el.dataset.index == this.$options.newsLenght - 1) {
            //         this.animating.false
            //     }
            // },

            // beforeLeave(el){
            //      if(!this.animating){
            //         this.animating = true
            //     }
            // },
            // leave(el, done){
            //  const delay = el.dataset.index*50
            //     setTimeout(() => {
            //     TweenLite.to(el, 0.5,{
            //         opacity: 0,
            //         oncomplete: done
            //     })
            //     },delay)
            // },
            // afterLeave(el){
            //      if(el.dataset.index == this.$options.newsLenght - 1) {
            //         this.animating.false
            //     }
            // },
        

            




        
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

        watch: {
            animating(val){
                if(!val && this.NewsToUpdate.length > 0){
                    this.news = this.NewsToUpdate
                    this.$options.newsLenght = this.news.length
                    this.NewsToUpdate = []
                }
            }
        }


    };
</script>