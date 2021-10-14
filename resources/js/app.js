/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Swal from 'sweetalert2'

window.Swal = Swal

const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
})

window.toast = toast

import { Form, HasError, AlertError } from 'vform'
window.Form = Form

import Vue2Editor from "vue2-editor";

Vue.use(Vue2Editor);
window.Fire = new Vue();

import vSelect from 'vue-select'

Vue.component('v-select', vSelect)
import 'vue-select/dist/vue-select.css';


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('form-login', require('./components/Auth/FormLogin').default);
Vue.component('admin-dashboard', require('./components/Admin/AdminDashboard').default);
Vue.component('roles', require('./components/Admin/Parametre/Roles').default);
Vue.component('filieres', require('./components/Admin/Parametre/Filieres').default);
Vue.component('niveau', require('./components/Admin/Parametre/Niveau').default);
Vue.component('cycles', require('./components/Admin/Parametre/Cycles').default);
Vue.component('pays', require('./components/Admin/Parametre/Pays').default);
Vue.component('villes', require('./components/Admin/Parametre/Villes').default);
Vue.component('admin-agence', require('./components/Admin/Agence/Agence').default);
Vue.component('university', require('./components/Agence/University').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
