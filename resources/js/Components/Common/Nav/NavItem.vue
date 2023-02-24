<template>
    <li
        :class="{
            'nav-active': false,
        }"
    >
        <a
            :href="item.value"
            :target="item.target"
            class="uppercase text-sm font-medium lg:py-9 tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300"
        >
            {{ item.name }}
        </a>
    </li>
</template>

<script setup>
const props = defineProps(['item'])
</script>

<style scoped>

</style>
