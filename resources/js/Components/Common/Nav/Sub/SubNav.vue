<template>
    <li class="relative group">
        <span
            class="uppercase text-sm font-medium lg:py-9 tracking-[0.86px] text-dark-semilight relative hover:text-dark duration-300"
        >
            {{ item.name }}
            <span class="ml-1.5">
                <svg width="8" height="6" class="inline-block" viewBox="0 0 8 6" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.0466659 0.744778L3.86978 5.53751C3.93301 5.61663 4.06672 5.61663 4.12995 5.53751L7.95348 0.744445C7.99899 0.68712 8.01247 0.601674 7.98793 0.527294C7.98285 0.511735 7.97719 0.499838 7.97245 0.490935C7.94325 0.436855 7.88717 0.403076 7.8256 0.403076H0.174128C0.112893 0.403076 0.0564835 0.436772 0.02753 0.490935C0.0226212 0.500004 0.0169636 0.511985 0.0122212 0.526378C-0.0124892 0.601674 0.000906017 0.687287 0.0466659 0.744778Z"
                        fill="#272727"
                    />
                </svg>
            </span>
        </span>
        <div class="sub-menu">
            <ul>
                <template v-for="subItem in item.children">
                    <SubNavItem :item="subItem" />
                </template>
            </ul>
        </div>
    </li>
</template>

<script setup>
import SubNavItem from "./SubNavItem.vue";

const props = defineProps(['item'])
</script>

<style scoped>

</style>
