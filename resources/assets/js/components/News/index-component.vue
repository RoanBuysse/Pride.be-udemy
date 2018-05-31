<template>
   <article>
                    <!-- <div class="card-header"><p>{{news.id}}lol</p></div> -->
                    <!-- <h2><a href="{{action('NewsController@show', [news.id])}}">{{news.titleNl}}</a></h2> -->
   </article>
</template>

<script>
    export default {
       data(){
        return {
            news: [],
            news: {
                id: '',
                titleNl:'',
                titleEn:'',
                titleFr:'',
                bodyNl:'',
                bodyFr:'',
                bodyEn:'',
                photo_id:''
            },
            news_id:'',
            paginaton: {},
            edit: false

           }
       },
      
      created() {
          this.fetchNews();
      },
 
      methods: {
          fetchNews() {
              fetch('api/news')
              .then(res => res.json())
              .then(res => {
                  console.log(res);
            })
          }
      }
      

    }
    
</script>
