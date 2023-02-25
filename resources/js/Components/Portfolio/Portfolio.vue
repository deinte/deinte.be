<template>
    <section class="md:py-[120px] py-16">
        <div class="container">
            <div class="grid md:grid-cols-2 md:gap-[72px]">
                <div>
                    <div class="space-y-6 md:space-y-[72px]">
                        <template v-for="item in firstColumn">
                            <PortfolioCard :item="item"/>
                        </template>
                    </div>
                </div>
                <div class="space-y-6 mt-6 md:mt-32 md:space-y-[72px]">
                    <template v-for="item in secondColumn">
                        <PortfolioCard :item="item"/>
                    </template>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import {computed} from 'vue';
import {usePage} from '@inertiajs/inertia-vue3';
import PortfolioCard from "./PortfolioCard.vue";

const portfolioItems = computed(() => usePage().props.value.projects);
const firstColumn = computed(() => portfolioItems?.value.slice(0, Math.ceil(portfolioItems.value.length / 2)));
const secondColumn = computed(() => portfolioItems?.value.slice(Math.ceil(portfolioItems.value.length / 2)))
</script>

<style scoped>

</style>
