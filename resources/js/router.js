import Router from 'vue-router'
import Vue from 'vue'

import Profile from './components/main/Profile.vue'
import Event from './components/main/events/Index.vue'
import News from './components/main/news/Index.vue'
import Users from './components/main/users/Index.vue'
import Tags from './components/main/masterdata/tags/Index.vue'
import JabatanKbn from './components/main/masterdata/jabatanKbn/Index.vue'
import JabatanKoperasi from './components/main/masterdata/jabatanKoperasi/Index.vue'
import Unit from './components/main/masterdata/unit/Index.vue'
import Divisi from './components/main/masterdata/divisi/Index.vue'
Vue.use(Router)

const router = new Router({
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '*',
            component: Profile
        },
        {
            path: '/event',
            component: Event
        },
        {
            path: '/news',
            component: News
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
    ]
})

export default router;