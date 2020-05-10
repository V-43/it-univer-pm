<template>
    <article class="message rounded shadow mb-4" :class="{ 'is-loading': deleting }">
        <h5 class="bg-primary text-light px-3 py-3">
            {{ comment.author }}
            <span class="float-right">
                <time>{{ comment.date }}</time>
                <button type="button" class="close ml-3" aria-label="Close" @click.prevent="deleteComment(comment.id)">
                    <span aria-hidden="true">&times;</span>
                </button>
            </span>
        </h5>
        <p class="message-body bg-light px-4 pb-3" v-html="comment.text"></p>
    </article>
</template>

<script>
    import axios from 'axios';
    
    export default {
        name: "Comment",
        props: ["comment"],
        data() {
            return {
                deleting: false
            }
        },
        methods: {
            deleteComment(id) {
                this.deleting = true;
                axios.delete(`/comments/${id}`)
                    .then(response => {
                        this.deleting = false;
                        this.$emit('comment-deleted', id);
                        $("article").removeClass("is-loading");
                    })
                    .catch(err => {
                        console.log(err);
                        this.deleting = false;
                        $("article").removeClass("is-loading");
                    });
            }
        }
    }
</script>

<style scoped>
    .delete {
        margin-left: 20px;
    }

    .is-loading {
        opacity: 0.5;
        cursor: progress;
    }
</style>
