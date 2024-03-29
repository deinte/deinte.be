import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/inertia-vue3';
import {InertiaProgress} from '@inertiajs/progress';
import VueClickAway from 'vue3-click-away';
import {Link, Head} from '@inertiajs/inertia-vue3';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome';
import VueEasyLightbox from 'vue-easy-lightbox';
import 'vue-easy-lightbox/external-css/vue-easy-lightbox.css';
import './Utils/fontawesome.js';

createInertiaApp({
    title: title => `${title} - Dante Schrauwen`,
    resolve: name => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({el, App, props, plugin}) {
        const app = createApp({render: () => h(App, props)})
            .component('Link', Link)
            .component('Head', Head)
            .component('font-awesome-icon', FontAwesomeIcon)
            .use(plugin)
            .use(VueClickAway)
            .use(VueEasyLightbox);

        app.config.globalProperties.$route = route

        app.mount(el);
    },
})

InertiaProgress.init()
