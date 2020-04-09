<template>
    <div class="bg-white px-8 md:px-0">
        <div class="container mx-auto py-10">
            <h2 class="text-n5_purple text-black text-4xl font-bold mb-8">Blog</h2>
            <h4 class="text-n5_purple text-xl font-italic" v-show="loading && error == null">
                Cargando...
            </h4>
            <h4 class="text-xl font-italic" v-show="!loading && error != null">
                Tuvimos un problema al leer los posts desde Medium 😞
            </h4>
            <ul class="flex flex-col md:flex-row mb-12"  v-show="!loading">
                <li v-for="(post, index) in posts.slice(0, 4)" class="w-full md:w-1/4 mr-0 md:mr-6 mb-4 md:mb-0">
                    <div class="bg-no-repeat bg-cover" v-bind:style="{ height: '300px', backgroundImage: 'url(\'/img/blog' + (index + 1) + '.jpg\')'}"></div>
                    <div class="bg-n5_purple h-48 px-4 flex items-center">
                        <a class="text-white" :href="'https://blog.9punto5.cl/' + post.uniqueSlug">
                            {{ post.title }}
                        </a>
                    </div>
                </li>
            </ul>
            <div class="text-center">
                <button onclick="location.href='https://blog.9punto5.cl/'" class="font-bold rounded-full px-4 py-3 border border-n5_pink text-n5_pink uppercase hover:bg-n5_pink hover:text-white">
                    Leer más artículos
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        name: 'Blog',
        created: function () {
            axios.get('/api/v1/blog')
                .then(response => {
                    this.loading = false
                    this.posts = response.data.payload.posts
            })
            .catch(error => {
                this.loading = false
                this.error = 'Error'
            })
        },
        data: function () {
            return {
                loading: true,
                error: null,
                posts: [],
            }
        },
    }
</script>
