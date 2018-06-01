<template>
   <article>
                   <div class="card card-body" v-for="news in news" v-bind:key="news.id">
                   <h3>{{news.title}}</h3>
                    <p v-for="photo in photo" v-bind:key="photo" v-if="news.photo_id === photo.id">{{photo.photo}}</p>
                   <p>{{news.body}}</p>
                   <!-- <p>{{photo.photo}}</p> -->
                   </div>
                   

   </article>
</template>

<script>
    export default {
       data(){
        return {
            news: [],
            photo: [],
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

            photo: {
                id: '',
                photo: ''
            },
            news_id:'',
            photo_id:'',
            paginaton: {},
            edit: false
            };
            
       },
      created() {
          this.fetchNews();
          this.fetchPhotos();
        //   this.idtoLink();
            
            
      },
 
      methods: {
          fetchNews() {
              fetch('api/news')
              .then(res => res.json())
              .then(res => {
               this.news = res.data;
                
            //    console.log(this.news);
            });
          },

          fetchPhotos() {
              fetch('api/photo')
              .then(res => res.json())
              .then(res => {
               this.photo = res.data;
              
               
            
            });
             this.editNews();
            //  console.log(photo);
          },

        editNews(news, photo) 
        {
        //   this.news=Vue.set(this.news, 2, {photo_id: '456', body: 'file2-b'});
        //  this.news=Vue.set(this.news, this.news.findIndex(f => f.token === '1'), {token: '456', name: 'file2-b'})
        //   console.log(this.photo);
        // Route::get('/api/questions', function() { return Questions::with('User')->get(); } );
        }

         
      }
      

    }
    
</script>
