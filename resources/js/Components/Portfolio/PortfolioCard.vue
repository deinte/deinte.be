<template>
    <div class="bg-white rounded-2xl overflow-hidden py-4">
        <a :href="item.website" class="aspect-video">
            <img
                class="w-full h-full object-cover"
                :srcset="item.cover.srcset"
                :src="item.cover.src"
                :alt="item.title"
            >
        </a>
        <div class="p-8">
            <div class="flex flex-row justify-between">
                <a
                    :href="item.website"
                    class="hover:text-green font-semibold text-[22px] leading-8 duration-300"
                >{{ item.title }}</a>

                <template v-if="item.website">
                    <a
                        :href="item.website"
                        class="text-green hover:text-green-700 transition-all duration-300"
                    >
                        <font-awesome-icon icon="fa-solid fa-link"/>
                    </a>
                </template>
            </div>
            <p class="text-dark-semilight mt-4 font-medium text-xs leading-5 uppercase tracking-[0.86px]"
            >{{ item.subtitle }}</p>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    item: {
        type: Object,
        required: true,
    }
})
</script>

<style scoped>

</style>
