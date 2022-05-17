import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import LogingForm from '../components/LogingForm.vue'
import CreneauPage from '../views/CreneauPage.vue'
import AllAp from '../components/AllAppointment.vue'
const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/loging',
    name: 'LogingForm',
    component: LogingForm
  },
  {
    path: '/CreneauPage',
    name: 'CreneauPage',
    component: CreneauPage
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path: '/AllAp',
    name: 'AllAp',
    component: AllAp
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})
var dtToday = new Date();

var month = dtToday.getMonth() + 1;
var day = dtToday.getDate();
var year = dtToday.getFullYear();

if(month < 10)
    month = '0' + month.toString();
if(day < 10)
    day = '0' + day.toString();

var minDate = (year-1) + '-' + month + '-' + day;  
console.log(minDate);
export default router
