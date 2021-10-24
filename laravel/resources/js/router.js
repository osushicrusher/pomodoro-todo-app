import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./components/pages/Home.vue";
import pageUser from "./components/pages/User.vue";
import pageAdmin from "./components/pages/Admin.vue";
import pageAdminUsers from "./components/pages/AdminUsers.vue";
import pageAdminCategories from "./components/pages/AdminCategories.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
          path: "/",
          name: "Home",
          component: Home
        },
        {
          path: "/users/:id",
          name: "pageUser",
          component: pageUser
        },
        {
            path: "/admin/",
            name: "pageAdmin",
            component: pageAdmin
        },
        {
          path: "/admin/users",
          name: "pageAdminUsers",
          component: pageAdminUsers
        },
        {
          path: "/admin/categories",
          name: "pageAdminCategories",
          component: pageAdminCategories
        },
    ]
});

export default router;
