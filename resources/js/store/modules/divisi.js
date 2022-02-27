import axios from 'axios'

const state = {
    divisi: []
}

const getters = {
    divisis(state) {
        return state.divisi
    }
}

const mutations = {}

const actions = {
    getDivisi({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/divisis').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeDivisi({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/divisis', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editDivisi({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/divisis/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteDivisi({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/divisis/' + data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    }
}

export default {
    state,
    getters,
    actions,
    mutations,
}