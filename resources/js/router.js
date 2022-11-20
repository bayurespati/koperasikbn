import Router from 'vue-router'
import Vue from 'vue'

import Profile from './components/main/Profile.vue'
import Homepage from './components/main/home/Index.vue'
import Event from './components/main/events/Index.vue'
import Artikel from './components/main/artikel/Index.vue'
import Image from './components/main/media/foto/Index.vue'
import Video from './components/main/media/video/Index.vue'
import Faq from './components/main/faq/Index.vue'
import Penghargaan from './components/main/penghargaan/Index.vue'
import Users from './components/main/users/Index.vue'
import Tags from './components/main/masterdata/tags/Index.vue'
import Laporan from './components/main/laporan/Index.vue'
import Kalender from './components/main/kalender/Index.vue'
import JabatanKbn from './components/main/masterdata/jabatanKbn/Index.vue'
import JabatanKoperasi from './components/main/masterdata/jabatanKoperasi/Index.vue'
import Unit from './components/main/masterdata/unit/Index.vue'
import Divisi from './components/main/masterdata/divisi/Index.vue'
import JenisPengajuan from './components/main/masterdata/jenisPengajuan/Index.vue'
import Terbaru from './components/main/simpanpinjam/terbaru/Index.vue'
import Permintaan from './components/main/simpanpinjam/permintaan/Index.vue'
Vue.use(Router)

const router = new Router({
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '*',
            component: Profile
        },
        {
            path: '/homepage',
            component: Homepage
        },
        {
            path: '/event',
            component: Event
        },
        {
            path: '/artikel',
            component: Artikel
        },
        {
            path: '/foto',
            component: Image
        },
        {
            path: '/video',
            component: Video
        },
        {
            path: '/faq',
            component: Faq
        },
        {
            path: '/penghargaan',
            component: Penghargaan
        },
        {
            path: '/kalender',
            component: Kalender
        },
        {
            path: '/laporan',
            component: Laporan
        },
        {
            path: '/users',
            component: Users
        },
        {
            path: '/tags',
            component: Tags
        },
        {
            path: '/jabatan-kbn',
            component: JabatanKbn
        },
        {
            path: '/jenis-pengajuan',
            component: JenisPengajuan
        },
        {
            path: '/jabatan-koperasi',
            component: JabatanKoperasi
        },
        {
            path: '/unit',
            component: Unit
        },
        {
            path: '/divisi',
            component: Divisi
        },
        {
            path: '/terbaru',
            component: Terbaru
        },
        {
            path: '/permintaan',
            component: Permintaan
        },
    ]
})

export default router;