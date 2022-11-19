import Vue from "vue"
import Vuex from "vuex"

import user from './modules/user'
import tag from './modules/tag'
import position from './modules/position'
import jabatanKbn from './modules/jabatan_kbn'
import jabatanKoperasi from './modules/jabatan_koperasi'
import event from './modules/event'
import artikel from './modules/artikel'
import image from './modules/image'
import video from './modules/video'
import faq from './modules/faq'
import laporan from './modules/laporan'
import unit from './modules/unit'
import divisi from './modules/divisi'
import penghargaan from './modules/penghargaan'
import simpanPinjam from './modules/simpan_pinjam'
import jenisPengajuan from './modules/jenis_pengajuan'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        user,
        image,
        video,
        tag,
        position,
        event,
        artikel,
        faq,
        laporan,
        jabatanKbn,
        jabatanKoperasi,
        unit,
        divisi,
        penghargaan,
        simpanPinjam,
        jenisPengajuan,
    }
})