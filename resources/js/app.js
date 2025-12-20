import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import PrimeVue from 'primevue/config'

// CSS de PrimeVue
import 'primeicons/primeicons.css'

// Tema (elige uno)
import Aura from '@primevue/themes/aura'

createInertiaApp({
  resolve: name => import(`./Pages/${name}.vue`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(PrimeVue, {
        theme: {
          preset: Aura
        }
      })
      .mount(el)
  },
})
