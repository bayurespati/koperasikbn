import axios from 'axios'

const state = {
    bagian: []
}

const getters = {
    bagians(state) {
        return state.bagian
    }
}

const mutations = {}

const actions = {
    getBagian({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/bagians').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeBagian({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/bagians', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editBagian({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/bagians/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteBagian({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/bagians/' + data).then(response => {
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