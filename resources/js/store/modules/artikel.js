import axios from 'axios'

const state = {
    artikels: [],
}

const getters = {
    artikels(state) {
        return state.artikels
    },
}

const mutations = {
}

const actions = {
    getArtikels({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/artikels').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeArtikel({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/artikels', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editArtikel({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/artikels/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteArtikel({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/artikels/' + data).then(response => {
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