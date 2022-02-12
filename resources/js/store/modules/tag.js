import axios from 'axios'

const state = {
    tags: []
}

const getters = {
    tags(state) {
        return state.tags
    }
}

const mutations = {}

const actions = {
    getTags({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/tags').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeTag({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/tags', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editTag({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/tags/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteTag({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/tags/' + data).then(response => {
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