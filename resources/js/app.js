import FullCalendar from 'vue-full-calendar'
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Include any npm packages that you plan to use in your project below.
 */
Vue.use(FullCalendar)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// include components below;
Vue.component('income-chart', require('./components/IncomeChart.vue').default);
Vue.component('calendar', require('./components/Calendar.vue').default);

// include partial vue components below;
Vue.component('sidebar-nav', require('./partials/SidebarNavigation.vue').default);
Vue.component('topbar-nav', require('./partials/TopbarNavigation.vue').default);

/**
 * Use this section to create your custom directives.
 *
 */

// This directive triggers when clicking outside of an element.
// For example, dropdowns will go away when you click outside of the element.
Vue.directive('click-outside', {
    bind: function (el, binding, vnode) {
        el.clickOutsideEvent = function (event) {
            // here I check that click was outside the el and his childrens
            if (!(el == event.target || el.contains(event.target))) {
                // and if it did, call method provided in attribute value
                vnode.context[binding.expression](event);
            }
        };
        document.body.addEventListener('click', el.clickOutsideEvent)
    },
    unbind: function (el) {
        document.body.removeEventListener('click', el.clickOutsideEvent)
    },
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
