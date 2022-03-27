import axios from 'axios'

const state = {
    images: [],
}

const getters = {
    images(state) {
        return state.images
    },
}

const mutations = {
}

const actions = {
    getImages({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/images').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeImage({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/images', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editImage({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/images/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteImage({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/images/' + data).then(response => {
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