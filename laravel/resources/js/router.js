import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import pageAdmin from "./components/pages/admin.vue";
import pageAdminSth from "./components/pages/adminSth.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
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
