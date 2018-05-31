<template>
   <article>
                   <div class="card card-body" v-for="news in news" v-bind:key="news.id">
                   <h3>{{news.title}}</h3>
                   <p>{{news.body}}</p>
                   </div>

   </article>
</template>

<script>
    export default {
       data(){
        return {
            news: [],
            news: {
                id: '',
                title:'',
                body:'',
                // titleNl:'',
                // titleEn:'',
                // titleFr:'',
                // bodyNl:'',
                // bodyFr:'',
                // bodyEn:'',
                photo_id:''
            },
            news_id:'',
            paginaton: {},
            edit: false
            };
       },
      created() {
          this.fetchNews();
      },
 
      methods: {
          fetchNews() {
              fetch('api/news')
              .then(res => res.json())
              .then(res => {
               this.news = res.data;
               console.log(this.news);
            });
          }
      }
      

    }
    
</script>
