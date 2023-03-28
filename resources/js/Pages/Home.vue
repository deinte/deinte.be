<template>
    <App>

        <Head>
            <title>Home</title>
        </Head>

        <Hero/>

        <Divider/>

        <Service />
    </App>
</template>

<script setup lang="ts">
import App from "../Components/Layouts/App.vue";
import Hero from '../Components/Cms/Hero.vue';
import Service from "../Components/Cms/Service.vue";
import Divider from "../Components/Utils/Divider.vue";
</script>

<style scoped>

</style>
