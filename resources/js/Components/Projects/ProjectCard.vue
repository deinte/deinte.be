<template>
    <div class="text-center">
        <div class="aspect-video">
            <img
                class="w-full h-full object-cover"
                :srcset="project.cover.srcset"
                :src="project.cover.src"
                :alt="project.title"
            >
        </div>

        <h3 class="text-2xl font-bold mt-2">{{ project.title }}</h3>
        <p class="mt-1">{{ project.subtitle }}</p>
    </div>
</template>

<script>
export default {
    name: "ProjectCard",

    props: {
        project: {
            type: Object,
            required: true,
        }
    }
}
</script>

<style scoped>

</style>
