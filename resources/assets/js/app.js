
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
        center: {lat: 4.626181, lng: -74.069106},
        zoom: 17
      })
    }
    const map = initMap()

// Login and sign up modal
    var el = {};
    el = (function() {
      return {
        signUp: document.querySelector('#sign-up-btn'),
        signIn: document.querySelector('#login-btn'),
        popupUp: document.querySelector('#sign-up-pop'),
        popUpIn: document.querySelector('#sign-in-pop'),
        cross: document.querySelectorAll('.cross')
      }
    })()
    
    var sign_up = true
    el.signUp.onclick = () => {
      el.popupUp.classList.remove('no-show')
    }

    el.signIn.onclick = () => { 
      el.popUpIn.classList.remove('no-show')
    }

    el.cross.forEach((value) => { 
      value.onclick = () => {
        let id = '#' + value.id.replace('cross-', '') + '-pop'
        document.querySelector(id).classList.add('no-show')
      }
    })

  }
})()