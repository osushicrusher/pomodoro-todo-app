
<template>
  <div>
    <!-- <router-link :to="{name:'add'}">新規追加</router-link> -->
    <ul>
      <li v-for="data in adminList" :key="data.id">
        {{ data.id }}/{{ data.name }}
        <!-- <router-link :to="{name: 'edit', params: { id: category.id }}">編集</router-link> -->
        <button @click="deleteCategory(data.id)">削除</button>
      </li>
    </ul>

    <p v-if="message">{{ message }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: "",
      adminList: {},
      path: '',
    };
  },
  created: function() {
    this.gatCategory();
  },
  computed: {
    /**
     * 例示のための関数です
     * @param  {String} URLの /admin/^^/ の部分
     * @return {String} ^^の部分
     */
    trimedPath: function() {
      return this.path.substring(7, this.path.length)
    }
  },
  methods: {
    gatCategory() {
      this.path = this.$route.path
      console.log(this.path)
      console.log(this.trimedPath)
      axios
        .get(`/api/admin/${this.trimedPath}`)
        .then(response => {
          this.adminList = response.data;
        })
        .catch(error => {
          this.message = error;
        });
    },
    deleteCategory(id) {
      axios
        .delete("/admin/categories" + id)
        .then(response => {
          this.gatCategory();
          this.message = "";
        })
        .catch(error => {
          this.message = error;
        });
    },
  }
};
</script>
