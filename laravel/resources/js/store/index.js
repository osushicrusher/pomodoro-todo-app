import Vue from 'vue';
import Vuex from 'vuex';
import auth from "./modules/auth";
import alert from "./modules/alert";
import users from "./modules/users";
import categories from "./modules/categories";
import nav from "./modules/nav";
 
Vue.use(Vuex);
 
export default new Vuex.Store({
    modules: {
        auth,
        alert,
        users,
        categories,
        nav
    }
});
