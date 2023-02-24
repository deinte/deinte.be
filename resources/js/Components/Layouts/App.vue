<template>
    <div class="antialiased font-poppins text-[15px] leading-7 text-dark bg-[#F5FCF8]">
        <NavBar/>

        <main>
            <slot/>
        </main>

        <Footer/>
    </div>
</template>

<script setup lang="ts">
import NavBar from '../Common/Nav/NavBar.vue';
import Footer from '../Common/Footer/Footer.vue';
</script>
