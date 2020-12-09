<template>
    <div>
        <h3 class="text-center">All Cleints</h3><br/>
 
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="client in clients" :key="client.id">
                <td>{{ client.id }}</td>
                <td>{{ client.first_name }} - {{ first_name }} </td>
                <td>{{ client.email  }}</td>
                <td>{{ client.created_at }}</td>
                <td>{{ client.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: client.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteclient(client.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                clients: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/clients')
                .then(response => {
                    this.clients = response.data;
                });
        },
        methods: {
            deleteclient(id) {
                this.axios
                    .delete(`http://localhost:8000/api/client/delete/${id}`)
                    .then(response => {
                        let i = this.clients.map(item => item.id).indexOf(id); // find index of your object
                        this.clients.splice(i, 1)
                    });
            }
        }
    }
</script>