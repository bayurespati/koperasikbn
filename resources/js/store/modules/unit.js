import axios from 'axios'

const state = {
    unit: []
}

const getters = {
    units(state) {
        return state.unit
    }
}

const mutations = {}

const actions = {
    getUnit({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/units').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeUnit({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/units', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editUnit({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/units/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteUnit({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/units/' + data).then(response => {
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