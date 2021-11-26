import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./components/pages/Home.vue";
import pageUser from "./components/pages/User.vue";
import pageAdmin from "./components/pages/Admin/Admin.vue";
import pageAdminUsers from "./components/pages/Admin/AdminUsers.vue";
import pageAdminCategories from "./components/pages/Admin/AdminCategories.vue";
import pageAdminMail from "./components/pages/Admin/AdminMail";
import pageAdminDownload from "./components/pages/Admin/AdminDownload";
import LineChart from "./components/parts/Charts/LineChart";
import Task from "./components/pages/Task";
import pageCalendar from "./components/pages/Calendar";
import Analytics from "./components/pages/Analytics";
import Setting from "./components/pages/Setting";
import NotFound from "./components/pages/NotFound";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
          path: "/",
          name: "Home",
          component: Home
        },
        {
          path: "/user/:id",
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
          path: "/admin/users:page",
          name: "pageAdminUsersParam",
          component: pageAdminUsers
        },
        {
          path: "/admin/categories",
          name: "pageAdminCategories",
          component: pageAdminCategories
        },
        {
          path: "/admin/mail",
          name: "pageAdminMail",
          component: pageAdminMail
        },
        {
          path: "/admin/download",
          name: "pageAdminDownload",
          component: pageAdminDownload
        },
        {
          path: "/chart",
          name: "pageChart",
          component: LineChart
        },
        {
          path: "/calendar",
          name: "pageCalendar",
          component: pageCalendar
        },
        {
          path: "/task/:id",
          name:"pageTask",
          component: Task
        },
        {
          path: "/analytics/:id",
          name:"pageAnalytics",
          component: Analytics
        },
        {
          path: "/setting/:id",
          name:"pageSetting",
          component: Setting
        },
        {
          path: '*',
          name: 'NotFound',
          component: NotFound
        }
    ]
});

export default router;
