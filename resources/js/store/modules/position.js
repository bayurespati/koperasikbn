import axios from 'axios'

const state = {
    positions: []
}

const getters = {
    posistions(state) {
        return state.positions
    }
}

const mutations = {}

const actions = {
    getPositions({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/positions').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storePosition({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/positions', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editPosition({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/positions/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deletePosition({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/positions/' + data).then(response => {
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