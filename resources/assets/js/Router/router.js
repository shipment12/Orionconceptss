import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import LandingPage from '../components/landing/LandingPage';
import Login from '../components/login/Login';
import Advertiser from '../components/Advertiser';
import PublisherSignup from '../components/login/PublisherSignup';
import ActualPublisherSingUp from '../components/login/pubSignup/ActualPublisherSingUp';
import AdvertiserSignup from '../components/login/advertiser/AdvertiserSignup';

const routes = [
    { path: '/', component: LandingPage },
    { path: '/login', component: Login },
     
     {path: '/advertiser', component: Advertiser},
     {path: '/publishersignup', component: PublisherSignup},
     {path: '/actualpublishersingup', component: ActualPublisherSingUp},
     {path: '/advertisersignup', component: AdvertiserSignup}
  ]

  const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang:false,
    mode:'history'
  })

  export default router;