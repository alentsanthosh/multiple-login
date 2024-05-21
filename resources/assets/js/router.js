import Vue from 'vue';
import Router from 'vue-router';
import UserDashboard from './components/UserDashboard.vue';
import DistributorDashboard from './components/DistributorDashboard.vue';
import LoginComponent from './components/LoginComponent.vue';

Vue.use(Router);

const router = new Router({
  routes: [
    {
      path: '/',
      component: LoginComponent,
    },
    {
      path: '/user/dashboard',
      component: UserDashboard,
      meta: { role: 'user' },
    },
    {
      path: '/distributor/dashboard',
      component: DistributorDashboard,
      meta: { role: 'distributor' },
    },
  ],
});

router.beforeEach((to, from, next) => {
  const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
  const role = localStorage.getItem('role');

  if (requiresAuth && !role) {
    next('/login');
  } else if (requiresAuth && role !== to.meta.role) {
    next('/');
  } else {
    next();
  }
});

export default router;
