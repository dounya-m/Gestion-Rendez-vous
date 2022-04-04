import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

// import Vue from 'vue'

// import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap an BootstrapVue CSS files (order is important)
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'


createApp(App).use(router).mount('#app')
