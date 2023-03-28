<template>
    <section class="md:py-[120px] py-20">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 items-end gap-6">
                <div class="max-w-[461px]">
                    <p class="uppercase font-medium text-sm tracking-[0.84px] after:bg-green-semilight after:absolute after:w-full after:h-2 relative after:left-0 inline-block after:bottom-0 after:-z-10">
                        What we do</p>
                    <h2 class="font-semibold mt-4 text-4xl leading-snug lg:text-5xl lg:leading-[62px]">Delivering
                        quality products</h2>
                </div>
                <div class="flex md:flex-row flex-col md:items-center gap-2 md:gap-16 justify-end max-w-sm md:ml-auto">
                    <!--
                    <div class="flex items-center text-left gap-4">
                        <h2 class="text-[56px] leading-[72px] font-semibold text-green">3</h2>
                        <p class="md:text-[15px] md:leading-[22px] text-lg">Years in business</p>
                    </div>
                    <div class="flex items-center text-left gap-4">
                        <h2 class="text-[56px] leading-[72px] font-semibold text-green" data-vanilla-counter data-start-at="0" data-end-at="28" data-time="3000" data-delay="0" data-format="{}"></h2>
                        <p class="md:text-[15px] md:leading-[22px] text-lg">Designers & developers</p>
                    </div>
                    -->
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
                <div class="p-8 pt-16 bg-white hover:shadow-custom duration-300 rounded-2xl">
                    <font-awesome-icon :icon="['fab', 'laravel']" size="6x"/>
                    <h4 class="text-[22px] leading-8 font-semibold mt-16">Webapplications</h4>
                    <p class="mt-4 text-[15px] leading-7 text-dark-light">Laravel's modular design, intuitive syntax,
                        and powerful features make it perfect for building scalable and high-performance web apps. Its
                        built-in caching, queuing, and database management tools ensure optimal performance.</p>
                    <Link :href="$route('contact.show')"
                          class="w-8 h-8 mt-8 bg-green flex items-center justify-center rounded-full">
                        <font-awesome-icon :icon="['fas', 'chevron-right']" color="white"/>
                    </Link>
                </div>
                <div class="p-8 pt-16 bg-white hover:shadow-custom duration-300 rounded-2xl">
                    <font-awesome-icon :icon="['fab', 'shopify']" size="6x"/>
                    <h4 class="text-[22px] leading-8 font-semibold mt-16">Webshops</h4>
                    <p class="mt-4 text-[15px] leading-7 text-dark-light">Shopify is a user-friendly e-commerce platform
                        that offers a simple and intuitive interface, along with a wide range of features and
                        integrations, making it an excellent choice for setting up an online store quickly and
                        easily.</p>
                    <Link :href="$route('contact.show')"
                          class="w-8 h-8 mt-8 bg-green flex items-center justify-center rounded-full">
                        <font-awesome-icon :icon="['fas', 'chevron-right']" color="white"/>
                    </Link>
                </div>
                <div class="p-8 pt-16 bg-white hover:shadow-custom duration-300 rounded-2xl">
                    <font-awesome-icon :icon="['fas', 'link']" size="6x"/>
                    <h4 class="text-[22px] leading-8 font-semibold mt-16">Custom Integrations</h4>
                    <p class="mt-4 text-[15px] leading-7 text-dark-light">Custom integrations facilitate seamless
                        communication and data sharing between different systems, optimizing business processes,
                        boosting productivity, and enhancing overall efficiency. It enables businesses to automate
                        workflows and streamline operations.</p>
                        <Link :href="$route('contact.show')"
                              class="w-8 h-8 mt-8 bg-green flex items-center justify-center rounded-full">
                            <font-awesome-icon :icon="['fas', 'chevron-right']" color="white"/>
                        </Link>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

export default {
    name: "Service",
    components: {FontAwesomeIcon}
}
</script>

<style scoped>

</style>
