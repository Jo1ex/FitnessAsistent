import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/HomeView.vue'



Vue.use(VueRouter)

const routes = [
  {
    path: '/domov',
    name: 'domov',
    component: HomeView
  },
  {
    path: '/uporabnik',
    name: 'uporabnik',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "uporabnik" */ '../views/UporabnikView.vue')
  },
  {
    path: '/registracija',
    name: 'registracija',
    component: () => import(/* webpackChunkName: "registracija" */ '../views/RegistracijaView.vue')
  },
  {
    path: '/menjavagesla',
    name: 'menjavagesla',
    component: () => import(/* webpackChunkName: "menjavagesla" */ '../views/MenjavageslaView.vue')
  },
  {
    path: '/verifikacija',
    name: 'verifikacija',
    component: () => import(/* webpackChunkName: "menjavagesla" */ '../views/VerifyView.vue')
  },
  {
    path: '/vnospodatkov',
    name: 'vnospodatkov',
    component: () => import(/* webpackChunkName: "menjavagesla" */ '../views/VnospodatkovView.vue')
  },

  {
    path: '/objave',
    name: 'objave',
    component: () => import(/* webpackChunkName: "menjavagesla" */ '../views/DomovView.vue')
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
