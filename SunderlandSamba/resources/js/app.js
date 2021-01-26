require('./bootstrap');

import router from "./routes";
import VueRouter from "vue-router";
import VueMaterial from 'vue-material';
import 'vue-material/dist/vue-material.min.css';
import 'vue-material/dist/theme/default.css';
import Index from './Index';


window.Vue = require('vue');

Vue.use(VueRouter);
Vue.use(VueMaterial)

const app = new Vue({
    el: '#app',
    router,
    components: {
        index: Index
    },
})

export default router;
