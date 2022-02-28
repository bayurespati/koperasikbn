import Vue from "vue"
import Vuex from "vuex"

import user from './modules/user'
import tag from './modules/tag'
import position from './modules/position'
import jabatanKbn from './modules/jabatan_kbn'
import jabatanKoperasi from './modules/jabatan_koperasi'
import event from './modules/event'
import unit from './modules/unit'
import divisi from './modules/divisi'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        user,
        tag,
        position,
        event,
        jabatanKbn,
        jabatanKoperasi,
        unit,
        divisi,
    }
})