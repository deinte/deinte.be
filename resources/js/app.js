import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/inertia-vue3';
import {InertiaProgress} from '@inertiajs/progress';
import VueClickAway from "vue3-click-away";
import route from 'ziggy'
import { ZiggyVue } from './ziggy'
import { Link } from '@inertiajs/inertia-vue3'

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({el, App, props, plugin}) {
        const app = createApp({render: () => h(App, props)})
            .component('Link', Link)
            .use(plugin)
            .mixin({ methods: { route } }) // add it
            .use(VueClickAway);

        app.config.globalProperties.$route = route
        app.mount(el);

    },
})

InertiaProgress.init()