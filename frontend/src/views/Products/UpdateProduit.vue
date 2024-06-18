<template>
    <div>
        <h1>Update a product</h1>
    </div>
</template>
<script setup>
import axios from 'axios';
import { onMounted } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute()

const getOneproduct= async ()=>{
await axios('http://127.0.0.1:8000/api/getonepdt/'+route.params.id)
.then((resp)=>{
    console.log(resp.data.data)
})
.catch((error)=>{
    console.log(error)
})
}

onMounted(() =>{
    //console.log(route.params.id);
    getOneproduct()

})
</script>
<style ></style>
