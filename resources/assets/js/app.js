
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
//window.Vue = require('vue')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));
(function() {

  const index = {
    loader:  () => {
      console.log('here')
      const loader = document.getElementById('loader')
      const site = document.querySelectorAll('.no-loaded')
      site.forEach((value) => {
        value.classList.remove('no-loaded')
        value.classList.add('loaded')
      })
      loader.classList.add('no-loaded')
    },
    onload: () => {
      return setTimeout(index.loader, 2500)
    }
  }

  window.onload = () => {
    index.onload()
    function initMap() {
      return new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
      })
    }
    const map = initMap()
  }
})()