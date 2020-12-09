<template>
    <div>
        <h3 class="text-center">Edit client</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateclient">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="client.title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="client.description">
                    </div>
                    <button type="submit" class="btn btn-primary">Update client</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                client: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/client/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.client = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateclient() {
                this.axios
                    .client(`http://localhost:8000/api/client/update/${this.$route.params.id}`, this.client)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>