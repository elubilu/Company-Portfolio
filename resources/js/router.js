
import Router from 'vue-router'
import Vue from 'vue'
Vue.use(Router)
// admin project pages 
import home from './components/pages/home'
import about from './components/pages/about'
import contact from './components/pages/contact'
// import header from './components/header'

const routes = [
    //projects routes....

    {
        path: '/', 
        component: home, 
        name: 'home'
       
    },
    {
        path: '/about', 
        component: about, 
        name: 'about'
       
    },
    {
        path: '/contact', 
        component: contact, 
        name: 'contact'
       
    },

    




]



export default new Router({
    mode: 'history', 
    routes

})