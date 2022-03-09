import Vue from 'vue'
import VueRouter from 'vue-router';


Vue.use(VueRouter)

import Home from './pages/Home'
import About from './pages/About'
import SinglePost from './pages/SinglePost'
import SingleCategory from './pages/SingleCategory'
import Ricerca from './pages/Ricerca'
import Scoperta from './pages/Scoperta'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/chi-sono',
            name: 'about',
            component: About,
        },
        {
            path: 'scoperta',
            name: 'Scoperta',
            component: Scoperta,
        },
        {
            path: '/ricerca',
            name: 'Ricerca',
            component: Ricerca,
        },
        {
            path: '/posts/:slug',
            name: 'single-post',
            component: SinglePost
        },
        {
            path: '/categories/:name',
            name: 'single-category',
            component: SingleCategory
        },
    ],
});

export default router;