
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
  el: '#app',
  loader: function () {
    const loader = document.getElementById('loader')
    const site = document.querySelector('.no-loaded')
    site.classList.remove('no-loaded')
    loader.classList.add('no-loaded')

  }
});

setTimeout(Vue.loader, 3000)