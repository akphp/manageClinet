// import Home from './components/AllPosts.vue';
import AllClients from './components/Clients/AllClient.vue';
import AddCleint from './components/Clients/AddCleint.vue';
import EditClient from './components/Clients/EditClient.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllClients
    },

    {
        name: 'client',
        path: '/',
        component: AllClients
    },
    {
        name: 'add',
        path: '/add',
        component: AddCleint
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditClient
    }
];