<template>
  <div class="leading-normal tracking-normal" id="main-body">
    <progress-bar />
    <div class="flex flex-wrap">

      <Sidebar />

      <div class="w-full bg-gray-100 pl-0 lg:pl-64 min-h-screen" :class="sideBarOpen ? 'overlay' : ''" id="main-content">

        <Navbar />

        <div class="p-6 bg-gray-100 mb-20 min-h-screen">
          <router-view />
        </div>

        <Footer />

      </div>
    </div>
  </div>
</template>

<script>
import ProgressBar from '../parts/ProgressBar'
import Sidebar from '../globals/SideBar'
import Navbar from '../globals/NavBar'
import Footer from './GlobalFooter.vue'
export default {
  name: 'Dashboard',
  data() {
    return {
      sideBarOpen: true
    }
  },
  computed: {

  },
  components: {
    ProgressBar,
    Sidebar,
    Navbar,
    Footer
  }
}
</script>
