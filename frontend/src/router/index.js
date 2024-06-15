import { createRouter, createWebHistory } from "vue-router";//createWebHistory: garder l'historique, naviguer entre des pages
import ListProduit from '../views/Products/ListProduit.vue'
import CreateProduit from '../views/Products/CreateProduit.vue'
import UpdateProduit from '../views/Products/UpdateProduit.vue'


//tableau de route qui contient des objets
    //{},{}, objets qui vont contenir des attributs et leurs valeurs

const routes = [
    {
        path:'/listProduit',
        name: 'listProduit',
        component: ListProduit
    },
    {
        path:'/createProduit',
        name: 'createProduit',
        component: CreateProduit
    },
    {
        path:'/updateProduit/:id',
        name: 'updateProduit',
        component: UpdateProduit
    },

];

// on declare les routes, on instancie la route
const router = createRouter({
    history:createWebHistory(),
    routes
})

export default router; //pour pouvoir l'utiliser ailleurs en utilisant "import..."
