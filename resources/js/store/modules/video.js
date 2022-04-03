import axios from 'axios'

const state = {
    videos: [],
}

const getters = {
    vidoes(state) {
        return state.videos
    },
}

const mutations = {
}

const actions = {
    getVideos({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/videos').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeVideo({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/videos', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editVideo({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/videos/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteVideo({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/videos/' + data).then(response => {
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