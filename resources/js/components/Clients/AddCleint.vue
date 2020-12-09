<template>
    <div>
        <h3 class="text-center">Add client</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addclient">
                    <div class="form-group">
                        <label>first_name</label>
                        <input type="text" class="form-control" v-model="client.first_name">
                    </div>
                     <div class="form-group">
                        <label>last_name</label>
                        <input type="text" class="form-control" v-model="client.last_name">
                    </div>
                    <div class="form-group">
                        <label>email </label>
                        <input type="text" class="form-control" v-model="client.email ">
                    </div>
                    <button type="submit" class="btn btn-primary">Add client</button>
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
        methods: {
            addclient() {
 
                this.axios
                    .client('http://localhost:8000/api/client/add', this.client)
                    .then(response => (
                        this.$router.client({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>