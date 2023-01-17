<template>
    <div class="text-left space-y-4">
        <div class="aspect-video bg-gray-200 relative rounded-md shadow-sm overflow-hidden">
            <div class="w-full h-full absolute animate-pulse"></div>
            <img
                class="w-full h-full object-cover"
                :srcset="project.cover.srcset"
                :src="project.cover.src"
                :alt="project.title"
            >
        </div>

        <div class="space-y-2">
            <div class="space-y-1 text-lg font-medium leading-6">
                <h3>{{ project.title }}</h3>
                <p class="text-green-600" v-if="project.subtitle">{{ project.subtitle }}</p>
            </div>

            <ul role="list" class="flex space-x-5" v-if="project.website">
                <li>
                    <a :href="project.website" class="transition-all text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Go to this project</span>
                        <font-awesome-icon icon="fa-solid fa-globe"/>
                    </a>
                </li>
            </ul>
        </div>
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
