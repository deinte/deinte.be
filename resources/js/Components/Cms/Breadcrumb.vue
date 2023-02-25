<template>
    <section
        class="bg-[url('/assets/images/header-bg.png')] bg-right-top bg-no-repeat bg-cover pt-18 pb-12 md:pb-[120px] md:pt-[120px]">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h2 class="font-semibold text-4xl leading-snug md:text-6xl md:leading-snug lg:text-[70px] lg:leading-[90px]"
                    >{{ page }}</h2>
                    <ul class="mt-2 text-center">
                        <li
                            class="hover:text-green inline-block tracking-[0.86px] font-medium uppercase duration-300 after:inline-block after:text-green after:mx-1.5 after:top-[2px] after:relative after:content-['/']"
                        >
                            <a :href="$route('index')">Home</a>
                        </li>
                        <li
                            class="text-dark-semilight inline-block tracking-[0.86px] font-medium uppercase duration-300"
                        >
                            <a
                                href="#"
                            >{{ page }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const props = defineProps({
    page: {
        required: true,
        type: String,
    }
})
</script>

<style scoped>

</style>
