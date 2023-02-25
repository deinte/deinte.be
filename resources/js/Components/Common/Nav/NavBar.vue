<template>
    <header class="main-menu">
        <nav class="fixed top-0 w-full z-50 mobile-menu-bg">
            <div class="container">
                <div class="lg:flex items-center justify-between gap-6">
                    <div class="flex items-center justify-between">
                        <a :href="$route('index')" class="py-3">
                            <img :src="logo" class="w-32" alt="logo"/>
                        </a>
                        <button
                            class="text-end mobile-menu-button lg:hidden"
                            @click="showMobileNav = !showMobileNav"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                 stroke="currentColor" class="w-8 h-8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                                />
                            </svg>
                        </button>
                    </div>
                    <div
                        id="navbarNav"
                        class="mobile-menu lg:block"
                        :class="{
                            'hidden': !showMobileNav,
                            'block': showMobileNav,
                        }"
                    >
                        <ul class="lg:space-x-8 space-y-4 lg:space-y-0 lg:flex items-center mt-6 lg:mt-0 max-[1024px]:max-h-80 max-[1024px]:overflow-scroll">
                            <template v-if="mainMenu" v-for="item in mainMenu.menuItems">
                                <template v-if="item.children.length">
                                    <SubNav :item="item"/>
                                </template>

                                <template v-else>
                                    <NavItem :item="item"/>
                                </template>
                            </template>

                            <a :href="$route('contact.show')" class="btn-blue navbar-btn lg:!ml-16">get in contact</a>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>

<script setup>
import {computed, ref} from 'vue'
import {usePage} from '@inertiajs/inertia-vue3'
import SubNav from "./Sub/SubNav.vue";
import NavItem from "./NavItem.vue";

const showMobileNav = ref(false);
const mainMenu = computed(() => usePage().props.value.menus.main);
const logo = computed(() => usePage().props.value.logo.color);
</script>

<style scoped>

</style>
