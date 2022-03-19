import axios from 'axios'

const state = {
    faqs: [],
}

const getters = {
    faqs(state) {
        return state.faqs
    },
}

const mutations = {
}

const actions = {
    getFaqs({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/faqs').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeFaq({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/faqs', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editFaq({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/faqs/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteFaq({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/faqs/' + data).then(response => {
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