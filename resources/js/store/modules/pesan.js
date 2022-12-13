import axios from 'axios'

const state = {
    pesans: [],
}

const getters = {
    pesans(state) {
        return state.pesans
    },
}

const mutations = {
}

const actions = {
    getPesan({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/pesan').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editPesan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/pesan/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deletePesan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/pesan/' + data).then(response => {
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