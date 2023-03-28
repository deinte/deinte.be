<template>
    <footer class="bg-dark">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-10 lg:gap-24 md:py-[120px] py-20">
                <div class="md:col-span-2 md:border-r border-[#3D3D3D]">
                    <div class="max-w-xs">
                        <img :src="logo" class="w-28" alt=""/>
                        <p class="mt-8 text-[15px] leading-7 text-[#7B7B7B]">
                            Transforming ideas into digital reality.
                        </p>
                        <div class="md:mt-12 mt-8">
                            <ul class="flex items-center space-x-4">
                                <li>
                                    <a href="https://github.com/deinte">
                                        <font-awesome-icon :icon="['fab', 'github']"/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-3">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="text-white" v-if="footerMainMenu">
                            <p class="font-semibold text-lg leading-7 text-white">{{ footerMainMenu.name }}</p>
                            <ul class="md:mt-8 mt-4 space-y-4">
                                <template v-for="item in footerMainMenu.menuItems">
                                    <li>
                                        <a
                                            :href="item.value"
                                            class="text-[#7B7B7B] hover:text-[#FAFAFA] text-[15px] leading-[22px] duration-300"
                                        >{{ item.name }}</a>
                                    </li>
                                </template>
                            </ul>
                        </div>
                        <div class="text-white" v-if="footerClientsMenu">
                            <p class="font-semibold text-lg leading-7 text-white">{{ footerClientsMenu.name }}</p>
                            <ul class="md:mt-8 mt-4 space-y-4">
                                <template v-for="item in footerClientsMenu.menuItems">
                                    <li>
                                        <a
                                            :href="item.value"
                                            :target="item.target"
                                            class="text-[#7B7B7B] hover:text-[#FAFAFA] text-[15px] leading-[22px] duration-300"
                                        >{{ item.name }}</a>
                                    </li>
                                </template>
                            </ul>
                        </div>
                        <div class="text-white lg:col-start-3">
                            <a
                                :href="$route('contact.show')"
                                class="font-semibold text-lg leading-7 text-white"
                            >Contact me</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#3D3D3D] h-px w-full block"></div>
            <div class="grid grid-cols-1">
                <div class="py-8">
                    <p class="text-[#7B7B7B] text-[15px] leading-7">Copyright &copy; 2022 - {{
                            new Date().getFullYear()
                        }} Dante Schrauwen | All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
import {computed} from "vue";
import {usePage} from "@inertiajs/inertia-vue3";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

const logo = computed(() => usePage().props.value.logo.white);
const footerMainMenu = computed(() => usePage().props.value.menus.footer_main);
const footerClientsMenu = computed(() => usePage().props.value.menus.footer_clients);
</script>
