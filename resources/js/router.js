import { createRouter, createWebHistory } from 'vue-router'; // Import specific functions from 'vue-router'
import Home from './pages/Home.vue';


// Create a router instance using createRouter and createWebHistory
const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
    ],
});


export default router;
