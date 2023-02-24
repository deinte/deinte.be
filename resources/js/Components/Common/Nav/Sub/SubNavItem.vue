<template>
    <li>
        <a
            :href="item.value"
            class="uppercase text-sm font-medium tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300"
        >{{ item.name }}</a>
    </li>
</template>

<script setup>
const props = defineProps(['item'])
</script>

<style scoped>

</style>
