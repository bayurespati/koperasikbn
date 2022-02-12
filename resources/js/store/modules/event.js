import axios from 'axios'

const state = {
    events: [],
    images: []
}

const getters = {
    events(state) {
        return state.events
    },

    images(state) {
        return state.images
    }
}

const mutations = {
    set_event_images: (state, images) => {
        state.images = images;
    },

    add_event_image(state, image) {
        state.images.push(image);
    }
}

const actions = {
    getEvents({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/events').then(response => {
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeEvent({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/events', data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    editEvent({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.patch('/dashboard/events/' + data.id, data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteEvent({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/events/' + data).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    getEventImages({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/events/image', {
                params: {
                    event_id: data
                }
            }).then(response => {
                commit('set_event_images', response.data.data)
                resolve(response)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    storeEventImage({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/events/' + data.event_id + '/image', data).then(response => {
                commit('add_event_image', response.data.data)
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    deleteEventImage({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.delete('/dashboard/events/' + data.event_id + '/image', data).then(response => {
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