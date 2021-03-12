import Vue from 'vue';
import VueRouter from 'vue-router';
import waitinglist from './components/waitinglist';
import listsave from './components/listsave';
import addform from './components/addform';
//import ExampleComponent from './components/ExampleComponent';

Vue.use(VueRouter);

export default new VueRouter({
        routes:[
            {
                path:'/',
                component:waitinglist
            },
            {
                path:'/enregistrer',
                component:listsave
            },
            {   path: '*',
                redirect: '/'
            },
            {
                path:'/ajouter',
                component:addform
            },
        ],
        mode:'history'
});
