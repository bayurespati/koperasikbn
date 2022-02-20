import axios from 'axios'

const state = {
    jabatanKoperasi: []
}

const getters = {
    jabatanKoperasis(state) {
        return state.jabatanKoperasi
    }
}

const mutations = {}

const actions = {
    getJabatanKoperasi({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/jabatan-koperasi').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeJabatanKoperasi({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/jabatan-koperasi', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editJabatanKoperasi({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/jabatan-koperasi/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteJabatanKoperasi({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/jabatan-koperasi/' + data).then(response => {
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