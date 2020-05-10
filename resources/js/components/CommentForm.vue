<template>
    <div class="form-group">
        <form method="post" :action="action" @submit.prevent="saveComment">
            <div class="bg-success text-light px-3 py-3" v-if="success">
                <button type="button" class="close ml-3" aria-label="Close" @click.prevent="hideSuccess">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ success }}
            </div>
            <div class="bg-danger text-light px-3 py-3" v-if="error">
                <button type="button" class="close ml-3" aria-label="Close" @click.prevent="hideError">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ error }}
            </div>
            <div class="field">
                <b>Message</b>
                <textarea class="textarea form-control mb-3" rows="4" name="message" v-model="message" placeholder="Type your comments here" required></textarea>
            </div>
            <div class="field is-grouped">
                <button class="btn btn-primary">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </div>
        </form>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "CommentForm",
        props: ["action"],
        data() {
            return {
                message: "",
                success: "",
                error: ""
            }
        },
        methods: {
            saveComment() {
                this.success = "";
                this.error = "";
                axios.post(this.action, {message: this.message})
                    .then(response => {
                        this.$emit('comment-saved', this.message);
                        this.message = "";
                        this.success = response.data.message;
                    })
                    .catch(err => {
                        console.log(err);
                        this.error = "Something wrong";
                    });
            },
            hideSuccess() {
                this.success = "";
            },
            hideError() {
                this.error = "";
            }
        },
        computed: {
            postData() {
                return {
                    message: this.message
                }
            }
        }
    }
</script>

<style scoped>

</style>
