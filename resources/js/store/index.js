import Vue from "vue"
import Vuex from "vuex"

import user from './modules/user'
import tag from './modules/tag'
import position from './modules/position'
import jabatanKoperasi from './modules/jabatan_koperasi'
import event from './modules/event'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        user,
        tag,
        position,
        event,
        jabatanKoperasi
    }
})