import axios from 'axios'

const state = {
    penghargaans: [],
}

const getters = {
    penghargaans(state) {
        return state.penghargaans
    },
}

const mutations = {
}

const actions = {
    getPenghargaan({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/penghargaans').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storePenghargaan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/penghargaans', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editPenghargaan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/penghargaans/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deletePenghargaan({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/penghargaans/' + data).then(response => {
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