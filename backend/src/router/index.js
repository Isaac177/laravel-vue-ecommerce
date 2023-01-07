import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/Login.vue'
import RequestPassword from "../views/RequestPassword.vue";


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
        path: '/login',
        name: 'Login',
        component: Login,
    },

      {
        path: '/request-password',
        name: 'RequestPassword',
          component: RequestPassword,
      }
  ]
})

export default router
