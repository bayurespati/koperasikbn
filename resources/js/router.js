import Router from 'vue-router'
import Vue from 'vue'

import Profile from './components/main/Profile.vue'
import Event from './components/main/events/Index.vue'
import News from './components/main/news/Index.vue'
import users from './components/main/users/Index.vue'
import tags from './components/main/masterdata/tags/Index.vue'
import positions from './components/main/masterdata/positions/Index.vue'
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
            component: users
        },
        {
            path: '/tags',
            component: tags
        },
        {
            path: '/positions',
            component: positions
        }
    ]
})

export default router;