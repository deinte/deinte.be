<template>
    <App>

        <Head>
            <title>Projecten</title>
        </Head>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-8 gap-y-16 py-16">

            <template v-for="project in projects">
                <project-card :project="project"/>
            </template>

        </div>

    </App>
</template>

<script>
import App from "../Components/Layouts/App.vue";
import ProjectCard from "../Components/Projects/ProjectCard.vue";

export default {
    name: "Projects",

    components: {
        ProjectCard,
        App
    },

    props: {
        projects: {
            type: Array,
            required: true,
        }
    }
}
</script>

<style scoped>

</style>
