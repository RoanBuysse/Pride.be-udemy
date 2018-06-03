
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');

import Vue from 'vue'
import VueI18n from 'vue-i18n'
Vue.use(VueI18n)

Vue.config.productionTip = false

var en = require('json-loader!./../../lang/en.json')
var nl = require('json-loader!./../../lang/nl.json')
var fr = require('json-loader!./../../lang/fr.json')

const messages = {   
    en: {     
    message: en
   
    },   
    nl: {     
     message: nl
    },
    fr: {     
        message: fr
       } 
  }


  const i18n = new VueI18n({
    locale: document.documentElement.lang, // set locale
    messages // set locale messages
  })

Vue.component('News', require('./components/News/News.vue'));
Vue.component('Show', require('./components/News/NewsShow.vue'));
Vue.component('Page_end', require('./components/FooterPage.vue'));



const app = new Vue({
    i18n,
    el: '#app',
   
});


$('div:empty').hide();

