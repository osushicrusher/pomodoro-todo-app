<template>
  <div>
    <button @click="toggleDarkMode()"><v-icon name="sun" class="dark:bg-red-700"/></button>
    <button @click="toggleDarkMode()"><v-icon name="moon"/></button>
  </div>
</template>

<script>
export default {
  data() {
    return {

    };
  },
  mounted: function() {
    this.loadDarkmode()
  },
  methods: {
    loadDarkmode() {
      if(localStorage.theme === 'dark'
      || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
      } else {
        document.documentElement.classList.remove('dark')
      }
    },
    toggleDarkMode() {
      if(document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark')
        localStorage.theme = 'light'
      } else {
        document.documentElement.classList.add('dark')
        localStorage.theme = 'dark'
      }
    },
  }
};
</script>
