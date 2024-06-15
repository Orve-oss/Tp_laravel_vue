<template>
    <div>
        <div class="row">
            <button @click="getProducts" >Cliquer</button>
            <button @click="VideProduit" >Vider</button>
            <table> <!--tr: table row, td: table data-->
                <thead>
                    <th>#</th>
                    <th>Code Pdt</th>
                    <th>Design Pdt</th>
                    <th>Actif Pdt</th>
                    <th>Prix Achat</th>
                    <th>Prix vente 1</th>
                    <th>Prix vente 2</th>
                </thead>
                <tbody>
                    <tr
                    v-for="(plist, index) in products" :key="index">
                        <td>{{ index+1 }}</td>
                        <td>{{ plist.CodePdt }}</td>
                        <td><router-link :to="{name: 'updateProduit', params: {id: plist.CodePdt}}"  >{{ plist.DesignPdt }}></router-link></td>
                        <td>{{ plist.ActifPdt }}</td>
                        <td>{{ plist.PrixAchat }}</td>
                        <td>{{ plist.PrixVente1 }}</td>
                        <td>{{ plist.PrixVente2 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script setup>
import axios from 'axios';
import { onMounted, ref } from 'vue'; /**
 * onMounted: fct
 */
let products = ref([]) //ref
const getProducts = ()=>{ /**fct asynchrone: attendre que la première tâche finisse d'abord */
    axios.get("http://127.0.0.1:8000/api/list")
    .then(function(resp){ //fct asynchrone
        products.value = resp.data.data //parce qu'on a utilisé une ressource
    }) /**il y a axios.then: lorsque ça marche, axios.catch: lorsqu'il y aura des erreurs(exceptions) */
}

const VideProduit = ()=>{
    products.value = []
}

onMounted(() =>{
    //getProducts();
})
/**
 * Différence entre option API et Composition API
 */
</script>
<style scoped> /*uniquement pour ce template*/
</style>

