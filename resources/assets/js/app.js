
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

import '@mdi/font/css/materialdesignicons.css' // Ensure you are using css-loader
import Vue from 'vue'

import Vuetify from 'vuetify'

Vue.use(Vuetify)



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('AppHome', require('./components/AppHome.vue'));


import router from './Router/router.js';
const app = new Vue({
	el: '#app',
	router,
    
    vuetify: new Vuetify({
    	theme: {
    	    themes: {
    		light: {
    		    primary: '#1d2671',
    		    secondary: '#E1341E'
    		}
    	    }
    	},
        icons: {
            iconfont: 'mdi', // default - only for display purposes
          },
    })
});
