<template>
    
    <div class="container">
        <h1>Articles</h1>
        <div class="card mb-2" v-for="article in articles" v-bind:key="article.id">
            <div class="card-body">
                <h3>{{article.title}}</h3>
                <p>{{article.body}}</p>

                <span class="float-sm-right">
                    <button class="btn btn-primary">Editar</button>

                    <button class="btn btn-danger">Eliminar</button>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    import Articles from '../models/Articles.js';
    export default {
        data() { 
            return { 
                articles: [],
                article: {
                    title: '',
                    body: '',
                    id: ''
                },
                article_id: '',
                pagination: {},
                edit:false 
            }
        },

        created() {
            this.fetch()
        },
        methods: { 
            fetch() {
                
                Articles.fetch(this);
                
                
            }
        }
        
    }
</script>

<style scoped>

</style>

