
import Router from 'vue-router'
import Vue from 'vue'
Vue.use(Router)
// admin project pages 
import home from './components/pages/home'
// import header from './components/header'

const routes = [
    //projects routes....

    {
        path: '/', 
        component: home, 
        name: 'home'
       
    },

    




]



export default new Router({
    mode: 'history', 
    routes

})