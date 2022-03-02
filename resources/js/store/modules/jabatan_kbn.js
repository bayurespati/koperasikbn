import axios from 'axios'

const state = {
    jabatanKbn: []
}

const getters = {
    jabatanKbns(state) {
        return state.jabatanKbn
    }
}

const mutations = {}

const actions = {
    getJabatanKbn({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/jabatan-kbn').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeJabatanKbn({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/jabatan-kbn', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editJabatanKbn({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/jabatan-kbn/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteJabatanKbn({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/jabatan-kbn/' + data).then(response => {
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