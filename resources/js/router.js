import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

// Imports
import Test from "./components/Test";

export default new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      component: Test
    }
  ]
});