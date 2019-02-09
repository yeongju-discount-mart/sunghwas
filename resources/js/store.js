import Vue from "vue";
import Vuex from "vuex";

import axios from "axios";

import createPersistedState from 'vuex-persistedstate';

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
    retrieveUser(context, payload) {
      return axios.get(`/api/user?id=${payload}`)
      .then(res => {
        context.commit('setCurrentUser', res.data);
      })
      .catch(err => {
        alert("에러 발생! 재접속해 주세요.");
      });
    },
  },
  plugins: [createPersistedState()]
});