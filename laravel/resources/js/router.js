import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./components/pages/Home.vue";
import pageAdmin from "./components/pages/Admin.vue";
import pageAdminSth from "./components/pages/AdminSth.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
          path: "/",
          name: "Home",
          component: Home
        },
        {
            path: "/admin/",
            name: "pageAdmin",
            component: pageAdmin
        },
        {
          path: "/admin/categories",
          name: "pageAdminCategories",
          component: pageAdminSth
        },
    ]
});

export default router;
