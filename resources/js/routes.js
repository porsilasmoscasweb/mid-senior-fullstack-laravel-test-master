import VueRouter from 'vue-route'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'list',
        component: require('./views/list.vue').default
    },
    {
        path: '/detail/:id',
        name: 'detail',
        component: require('./views/detail.vue').default
    }
]

export default new VueRouter({
    routes: routes,
    mode: 'history'
})

