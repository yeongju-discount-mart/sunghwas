import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

// Imports
import Main from "./pages/Main";
import Login from "./pages/Login";

export default new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      component: Main
    },
    {
      path: "/login",
      component: Login
    }
  ]
});