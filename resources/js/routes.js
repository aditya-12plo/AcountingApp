import Vue from 'vue';
import VueRouter from 'vue-router';


/**Component */
import Home from './components/Home.vue';


Vue.use(VueRouter);



let routes=[
{
	path:'/',
	component:Home
},

];

export default new VueRouter({
    // mode:'history',
	routes,
});