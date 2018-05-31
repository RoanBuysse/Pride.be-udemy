<template>
   <article>
                    <div class="card-header"><p>{{news.id}}lol</p></div>
                    <!-- <h2><a href="{{action('NewsController@show', [news.id])}}">{{news.titleNl}}</a></h2> -->
   </article>
</template>

<script>
    export default {
       props: ['news'],
        mounted() {
            console.log(this.news)
        } 
    }
    
</script>
