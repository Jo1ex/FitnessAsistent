import Vue from 'vue'
import VueRouter from 'vue-router'



Vue.use(VueRouter)

const routes = [
  {
    path: '/prijava',
    name: 'prijava',
    component: () => import(/* webpackChunkName: "uporabnik" */ '../views/PrijavaView.vue')
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
    path: '/uporabnikzaseben',
    name: 'uporabnikzaseben',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "uporabnik" */ '../views/UporabnikZasebenView.vue')
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
    path: '/',
    name: 'objave',
    component: () => import(/* webpackChunkName: "menjavagesla" */ '../views/DomovView.vue')
  },
  {
    path: '/nastavitve',
    name: 'nastavitve',
    component: () => import(/* webpackChunkName: "menjavagesla" */ '../views/NastavitveView.vue')
  },
  {
    path: '/urnikvadbe',
    name: 'urnikvadbe',
    component: () => import(/* webpackChunkName: "menjavagesla" */ '../views/UrnikVadbeView.vue')
  },
  {
    path: '/urnikprehrane',
    name: 'urnikprehrane',
    component: () => import(/* webpackChunkName: "menjavagesla" */ '../views/UrnikPrehraneView.vue')
  },
  {
    path: '/sestavaurnikavadbe',
    name: 'sestavaurnikavadbe',
    component: () => import(/* webpackChunkName: "menjavagesla" */ '../views/SestavaurnikavadbeView.vue')
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
