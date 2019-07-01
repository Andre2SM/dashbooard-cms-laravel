/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
import VueRouter from "vue-router";
import Vuetify from "vuetify";
import VueAxios from "vue-axios";

Vue.use(VueRouter);
Vue.use(Vuetify);
Vue.use(VueAxios);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component("master", require("./components/Master.vue").default);
Vue.component("login", require("./components/Login.vue").default);

const routes = [
    {
        path: "/dashboard",
        name: "dashboard",
        component: require("./components/Dashboard.vue").default
    },
    {
        path: "/profile",
        name: "profile",
        component: require("./components/Profile.vue").default
    },
    {
        path: "/calidad",
        name: "calidad",
        component: require("./components/Calidad.vue").default
    },
    {
        path: "/tests",
        name: "tests",
        component: require("./components/Tests.vue").default
    },
    {
        path: "/dominios",
        name: "dominios",
        component: require("./components/Dominios.vue").default
    },
    {
        path: "/login",
        name: "login",
        component: require("./components/Login.vue").default
    }
];

const router = new VueRouter({
    routes // short for `routes: routes`
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    router
});
