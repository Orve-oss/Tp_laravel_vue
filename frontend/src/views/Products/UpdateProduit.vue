<template>
    <div>
        <h1>Update a product</h1>
    </div>
</template>
<script setup>
import { onMounted } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute()

onMounted(() =>{
    console.log(route.params.id);
})
</script>
<style ></style>
