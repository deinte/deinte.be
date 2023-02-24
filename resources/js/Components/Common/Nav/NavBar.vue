<template>
    <header class="main-menu">
        <nav class="fixed top-0 w-full z-50 mobile-menu-bg">
            <div class="container">
                <div class="lg:flex items-center justify-between gap-6">
                    <div class="flex items-center justify-between">
                        <a href="index.html">
                            <img src="/assets/images/logo-dark.svg" class="" alt="logo"/>
                        </a>
                        <button
                            class="text-end mobile-menu-button lg:hidden"
                            @click="showMobileNav = !showMobileNav"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                 stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
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
                            <li class="nav-active">
                                <a href="index.html"
                                   class="uppercase text-sm font-medium lg:py-9 tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">
                                    Home
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="javaScript:void();"
                                   class="uppercase text-sm font-medium lg:py-9 tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">
                                    Pages
                                    <span class="ml-1.5">
                                            <svg width="8" height="6" class="inline-block" viewBox="0 0 8 6" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.0466659 0.744778L3.86978 5.53751C3.93301 5.61663 4.06672 5.61663 4.12995 5.53751L7.95348 0.744445C7.99899 0.68712 8.01247 0.601674 7.98793 0.527294C7.98285 0.511735 7.97719 0.499838 7.97245 0.490935C7.94325 0.436855 7.88717 0.403076 7.8256 0.403076H0.174128C0.112893 0.403076 0.0564835 0.436772 0.02753 0.490935C0.0226212 0.500004 0.0169636 0.511985 0.0122212 0.526378C-0.0124892 0.601674 0.000906017 0.687287 0.0466659 0.744778Z"
                                                    fill="#272727"
                                                />
                                            </svg>
                                        </span>
                                </a>
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a href="about.html"
                                               class="uppercase text-sm font-medium tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">About</a>
                                        </li>
                                        <li>
                                            <a href="faqs.html"
                                               class="uppercase text-sm font-medium tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">Faqs</a>
                                        </li>
                                        <li>
                                            <a href="services.html"
                                               class="uppercase text-sm font-medium tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">Service</a>
                                        </li>
                                        <li>
                                            <a href="utility.html"
                                               class="uppercase text-sm font-medium tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">Utility</a>
                                        </li>
                                        <li>
                                            <a href="pricing.html"
                                               class="uppercase text-sm font-medium tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="error.html"
                                               class="uppercase text-sm font-medium tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">Error</a>
                                        </li>
                                        <li>
                                            <a href="team.html"
                                               class="uppercase text-sm font-medium tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">Team</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="work.html"
                                   class="uppercase text-sm font-medium lg:py-9 tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">
                                    Work
                                </a>
                            </li>
                            <li>
                                <a href="blog.html"
                                   class="uppercase text-sm font-medium lg:py-9 tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="contact.html"
                                   class="uppercase text-sm font-medium lg:py-9 tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300">
                                    Contact
                                </a>
                            </li>
                            <a href="contact.html" class="btn-blue navbar-btn lg:!ml-16">Start a project</a>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>

<script setup lang="ts">
import {ref} from 'vue';

const showMobileNav = ref<boolean>(false)
</script>

<style scoped>

</style>
