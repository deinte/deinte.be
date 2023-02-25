<template>
    <App>
        <Head>
            <title>Contact</title>
        </Head>

        <Breadcrumb page="Contact"/>

        <Divider/>

        <div class="py-16 container">
            <h2 class='text-5xl font-bold'>Contact me</h2>
            <p class='text-3xl text-gray-700'>Send me an email</p>

            <p>contact [at] danteschrauwen [dot] be</p>
        </div>

    </App>
</template>

<script setup>
import Breadcrumb from '../Components/Cms/Breadcrumb.vue';
import Divider from '../Components/Utils/Divider.vue';
import App from '../Components/Layouts/App.vue';
</script>

<style scoped>

</style>
