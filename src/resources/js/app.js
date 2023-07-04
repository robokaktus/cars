require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3'
import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import vSelect from "vue-select"

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';
library.add(fas)

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            // .use(FlashMessage, {
            //     strategy: 'multiple'
            // })
            .component('font-awesome-icon', FontAwesomeIcon)
            .component("v-select", vSelect)
            .mixin({ methods: { route } })
            .mount(el);
    },
    progress: {
        color: '#29d',
    },
});
