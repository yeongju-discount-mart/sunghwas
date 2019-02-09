import Vue from "vue";
import Vuex from "vuex";

import axios from "axios";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    currentUser: null
  },
  getters: {
    getCurrentUser(state) {
      return state.currentUser;
    }
  },
  mutations: {
    setCurrentUser(state, payload) {
      state.currentUser = payload;
    }
  },
  actions: {
    loginUser(context, payload) {
      
    }
  }
});