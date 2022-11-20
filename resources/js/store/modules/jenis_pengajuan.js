import axios from 'axios'

const state = {
    jenisPengajuan: []
}

const getters = {
    jenisPengajuans(state) {
        return state.jenisPengajuan
    }
}

const mutations = {}

const actions = {
    getJenisPengajuan({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/jenis-pengajuan').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeJenisPengajuan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/jenis-pengajuan', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editJenisPengajuan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/jenis-pengajuan/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteJenisPengajuan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/jenis-pengajuan/' + data).then(response => {
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