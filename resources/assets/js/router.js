// resources/assets/js/router.js

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './components/Home.vue';
import Login from './components/ExampleComponent.vue';

const routes = [
  {
    path: '/home',
    name: 'home',
    component: Home
  },
  {
    path: '/',
    name: 'login',
    component: Login
  }
  // Add more routes here if needed
];

const router = new VueRouter({
  mode: 'history',
  routes
});

export default router;
