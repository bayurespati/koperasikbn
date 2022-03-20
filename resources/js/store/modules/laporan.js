import axios from 'axios'

const state = {
    laporans: [],
}

const getters = {
    laporans(state) {
        return state.laporans
    },
}

const mutations = {
}

const actions = {
    getLaporans({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/laporans').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeLaporan({ commit }, data) {
        console.log(data);
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/laporans', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editLaporan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/laporans/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteLaporan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/laporans/' + data).then(response => {
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