import { createApp } from 'vue'
import App from './App.vue'
//import '../src/styles.css'
import store from './store/index.js'
import router from './router/index.js'

import './assets/main.css'

const app = createApp(App)

app
    .use(store)
    .use(router)
    .mount('#app')
