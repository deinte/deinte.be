<template>
    <section class="bg-[url('/assets/images/home-bg.jpg')] bg-top py-36 md:py-[240px]">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h1 class="font-semibold text-4xl leading-snug md:text-6xl md:leading-snug lg:text-[70px] lg:leading-[90px] max-w-[800px] mx-auto"
                    >Transforming ideas into digital reality.</h1>
                    <p class="md:mt-8 mt-5 text-dark-light text-base md:text-lg leading-[30px]"
                    >Unleashing the full potential of the web, one line of code at a time.</p>
                    <div class="md:mt-12 mt-7">
                        <a
                            :href="$route('portfolio.show')"
                            class="btn-green"
                        >Explore my work</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Hero"
}
</script>

<style scoped>

</style>
