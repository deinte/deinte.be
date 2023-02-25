<template>
    <App>

        <Head>
            <title>Portfolio</title>
        </Head>

        <Breadcrumb page="Portfolio"/>

        <Divider/>

        <Portfolio/>

    </App>
</template>

<script setup>
import App from '../Components/Layouts/App.vue';
import Portfolio from '../Components/Portfolio/Portfolio.vue';
import Breadcrumb from '../Components/Cms/Breadcrumb.vue';
import Divider from '../Components/Utils/Divider.vue';
</script>

<style scoped>

</style>
