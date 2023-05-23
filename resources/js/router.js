import { createWebHistory, createRouter } from 'vue-router';

import Index from './pages/Index.vue';
import Watch from './pages/Watch.vue';

const routes = [
  { path: '/', component: Index },
  { path: '/season/:season', component: Index },
  { path: '/season/:season/episode/:episode', component: Watch }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;