import { data } from 'jquery';
import Vue from 'Vue'

const state = {
    simpan_pinjam: [],
    simpan: [],
    pinjam: [],
};

const getters = {
    simpna_pinjam(state) {
        return state.simpan_pinjam
    },

    simpan(state) {
        return state.simpan
    },

    pinjam(state) {
        return state.pinjam
    },
};

const mutations = {
    set_simpan_pinjam: (state, simpan_pinjam) => {
        state.simpan_pinjam = simpan_pinjam;
    },
    set_simpan: (state, simpan) => {
        state.simpan = simpan;
    },
    set_pinjam: (state, pinjam) => {
        state.pinjam = pinjam;
    },
};

const actions = {

    getSimpanPinjam({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/simpan-pinjam').then(response => {
                resolve(response);
                commit('set_simpan_pinjam', response.data.data);
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    getSimpanan({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/simpan-pinjam/simpan').then(response => {
                resolve(response.data)
                commit('set_simpan', response.data.data);
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    getPinjaman({ commit }) {
        return new Promise((resolve, reject) => {
            axios.get('/dashboard/simpan-pinjam/pinjam').then(response => {
                resolve(response.data)
                commit('set_pinjam', response.data.data);
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },

    uploadSimpanPinjam({ commit }, data) {
        return new Promise((resolve, reject) => {
            axios.post('/dashboard/simpan-pinjam/upload', data, {
                Headers: {
                    'enctype': 'multipart/form-data'
                }
            }).then(response => {
                resolve(response.data)
            }).catch(errors => {
                reject(errors.response.data.errors)
            })
        })
    },
};

export default {
    state,
    getters,
    actions,
    mutations,
}