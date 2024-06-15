<template>
    <div class="card mx-auto" style="width: 40rem; height: 40rem;">
        <div class="card-body">

            <form>
                <div class="mb-3">
                    <label for="code" class="form-label">CodePdt : </label>
                    <input type="text" v-model="CodePdt" class="form-control"> <!--v-model: binder la variable à la valeur qu'on aura à saisir-->

                </div>
                <div class="mb-3">
                    <label for="design" class="form-label">Designation : </label>
                    <input type="text" v-model="DesignPdt" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="actif" class="form-label">Actif : </label>
                    <input type="text" v-model="ActifPdt" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="prixachat" class="form-label">PrixAchat : </label>
                    <input type="text" v-model="PrixAchat" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="prixvente1" class="form-label">PrixVente1 : </label>
                    <input type="text" v-model="PrixVente1" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="prixvente2" class="form-label">PrixVente2 : </label>
                    <input type="text" v-model="PrixVente2" class="form-control">

                </div>

                <button type="submit" @click.prevent="addProduct" class="btn btn-primary">Valider</button>
                <button type="reset" class="btn btn-primary">Annuler</button>
            </form>


        </div>
    </div>
</template>
<script setup>
import axios from 'axios';
import { ref } from 'vue';

let CodePdt = ref()
let DesignPdt = ref()
let ActifPdt = ref()
let PrixAchat = ref(0)
let PrixVente1 = ref(0)
let PrixVente2 = ref(0)

const addProduct = () => {
    let data = new FormData();/**FormData: manipuler les formulaires, envoyer les valeurs en forme d'objets;
    append prendra deux valeurs: (1), (2) avec (1) qui sera la valeur qu'on enverra au backend,
    (2) la valeur qui sera affectée à 1 */
    data.append('CodePdt', CodePdt.value)
    data.append('DesignPdt', DesignPdt.value)
    data.append('ActifPdt', ActifPdt.value)
    data.append('PrixAchat', PrixAchat.value)
    data.append('PrixVente1', PrixVente1.value)
    data.append('PrixVente2', PrixVente2.value)

    axios.post("http://127.0.0.1:8000/api/saveproduit", data)
}


</script>
<style></style>
