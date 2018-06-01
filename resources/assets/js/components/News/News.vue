<template>
    <article>
        <div class="card card-body" v-for="news in news" v-bind:key="news.id">
            <h3>{{news.title}}</h3>
            <div v-for="photo in photo" v-bind:key="photo.id" v-if="news.photo_id === photo.id">

                <img v-bind:src="'/images/news/' + photo.photo" alt="Title of firsqgrrgqqrgt new item" class="featured_image img-responsive"
                />
            </div>

            <p>{{news.body}}</p>

        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchNews(pagination.prev_page_url)">Previous</a>
                </li>

                <li class="page-item disabled">
                    <a class="page-link text-dark" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a>
                </li>

                <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchNews(pagination.next_page_url)">Next</a>
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
                news: {
                    id: '',
                    title: '',
                    body: '',
                    photo_id: ''
                },

                photo: {
                    id: '',
                    photo: ''
                },
                news_id: '',
                photo_id: '',
                pagination: {},
                edit: false
            };

        },
        created() {
            this.fetchNews();
            this.fetchPhotos();
            //   this.idtoLink();


        },

        methods: {
            fetchNews(page_url) {
                let vm = this;
                page_url = page_url || 'api/news'
                fetch(page_url)
                    .then(res => res.json())
                    .then(res => {
                        this.news = res.data;
                        vm.makePagination(res.meta, res.links);

                        // console.log(res.links);
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
              console.log(pagination);

            },

            fetchPhotos() {
                fetch('api/photo')
                    .then(res => res.json())
                    .then(res => {
                        this.photo = res.data;



                    })

            }




        }


    };
</script>