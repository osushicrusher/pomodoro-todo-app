<template>
    <div>
        <vue-progress-bar></vue-progress-bar>
    </div>
</template>

<script>
export default {
    data() {
        return {
            
        }
    },
  methods: {
  	Progress: function()
    {
      this.$Progress.start();
      var self = this;
      setTimeout(function(){
         self.$Progress.finish();
      },1000);
    }
  },
  mounted () {
    this.$Progress.finish()
  },
  created () {
    this.$Progress.start()
    this.$router.beforeEach((to, from, next) => {
      if (to.meta.progress !== undefined) {
        let meta = to.meta.progress
        this.$Progress.parseMeta(meta)
      }
      this.$Progress.start()
      next()
    })
    this.$router.afterEach((to, from) => {
      this.$Progress.finish()
    })
  }

}



</script>