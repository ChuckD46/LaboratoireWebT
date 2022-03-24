import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Inventaire',
      component: () => import('../views/ListView.vue')
    },
    {
      path: '/Ajout',
      name: 'Ajout',
      component: () => import('../views/AjoutView.vue')
    },
    {
      path: '/Modification',
      name: 'Modification',
      component: () => import('../views/ModificationView.vue')
    },
    {
      path: '/Produit',
      name: 'Produit',
      component: () => import('../views/ProduitView.vue')
    },
  ]
})

export default router
