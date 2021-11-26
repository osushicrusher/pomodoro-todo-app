<template>
  <div>
    CSVページaaaa
    <input type="hidden" name="type" value="1" />
    <form action="/api/download" method="get">
      <v-icon name="download" />
      <button @click="downloadCSV()">csvダウンロード</button>
    </form>
  </div>
</template>

<script>

export default {
  data() {
    return {
      type: 0 //0:users
    }
  },
  components: {

  },
  created: function() {

  },
  computed: {

  },
  methods: {
    async downloadCSV() {
      const typeArr = ['users']
      const param = {type: typeArr[this.type]}
      const url = `/api/download`
      try {
        const res = await axios.post(url)
        console.log(res)
      } catch(err) {
        console.log(err.message)
      }
    }
  }
};
</script>
