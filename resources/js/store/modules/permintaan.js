import axios from 'axios'

const state = {
    permintaans: [],
}

const getters = {
    permintaans(state) {
        return state.permintaans
    },
}

const mutations = {
}

const actions = {
    getPermintaan({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/permintaan').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editPermintaan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/permintaan/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deletePemintaan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/permintaan/' + data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },
}

export default {
    state,
    getters,
    actions,
    mutations,
}