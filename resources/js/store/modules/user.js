import { data } from 'jquery';
import Vue from 'Vue'

const state = {
  user: {},
  users: [],
};

const getters = {
  user(state) {
    return state.user
  },

  users(state) {
    return state.users
  }
};

const mutations = {
  set_user: (state, user) => {
    state.user = user;
  },

  set_users: (state, users) => {
    state.users = users;
  },
};

const actions = {

  getUser({ commit }) {

    return new Promise((resolve, reject) => {
      axios.get('/dashboard/user').then(response => {
        resolve(response);
        commit('set_user', response.data.data);
      }).catch(errors => {
        reject(errors.response.data.errors)
      })
    })
  },

  getUsers({ commit }) {
    return new Promise((resolve, reject) => {
      axios.get('/dashboard/users').then(response => {
        resolve(response.data)
      }).catch(errors => {
        reject(errors.response.data.errors)
      })
    })
  },

  getAllUser({ commit }) {
    return new Promise((resolve, reject) => {
      axios.get('/dashboard/all-user').then(response => {
        resolve(response.data)
        commit('set_users', response.data.data);
      }).catch(errors => {
        reject(errors.response.data.errors)
      })
    })
  },

  getRoles({ commit }) {
    return new Promise((resolve, reject) => {
      axios.get('/dashboard/users/roles').then(response => {
        resolve(response.data)
      }).catch(errors => {
        reject(errors.response.data.errors)
      })
    })
  },

  storeUser({ commit }, data) {
    return new Promise((resolve, reject) => {
      axios.post('/dashboard/users', data).then(response => {
        resolve(response.data)
      }).catch(errors => {
        reject(errors.response.data.errors)
      })
    })
  },

  editUser({ commit }, data) {
    return new Promise((resolve, reject) => {
      axios.patch('/dashboard/users/' + data.id, data).then(response => {
        resolve(response.data)
        this.dispatch('getUser');
      }).catch(errors => {
        reject(errors.response.data.errors)
      })
    })
  },

  deleteUser({ commit }, data) {
    return new Promise((resolve, reject) => {
      axios.delete('/dashboard/users/' + data).then(response => {
        resolve(response.data)
      }).catch(errors => {
        reject(errors.response.data.errors)
      })
    })
  },

  uploadUser({ commit }, data) {
    return new Promise((resolve, reject) => {
      axios.post('/dashboard/users/upload', data, {
        Headers: {
          'enctype': 'multipart/form-data'
        }
      }).then(response => {
        resolve(response.data)
      }).catch(errors => {
        reject(errors.response.data.errors)
      })
    })
  },

};


export default {
  state,
  getters,
  actions,
  mutations,
}