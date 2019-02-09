import "./bootstrap";

import Vue from "vue";
import App from "./App.vue";

import axios from "axios";

import store from "./store";
import router from "./router";

import "normalize.css";

Vue.prototype.$http = axios;

Vue.config.productionTip = false;

new Vue({
  el: "#app",
  render: h => h(App),
  router,
  store
});