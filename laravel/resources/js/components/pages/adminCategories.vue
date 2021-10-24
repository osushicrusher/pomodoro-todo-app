
<template>
  <div lass="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <ul class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
        <li v-for="data in adminList" :key="data.id" class="p-2 lg:w-1/3 md:w-1/2 w-full">
          {{ data.name }}
          <button @click="deleteCategory(data.id)">削除</button>
        </li>
      </ul>
      <form action="/api/admin/categories" method="POST" enctype="multipart/form-data">
          <div>
              <label for="name">カテゴリー名</label>
              <input type="text" id="name" name="name" />
          </div>
          <button type="submit" @click="storeCategory()">登録する</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      adminList: {},
      path: '',
    };
  },
  created: function() {
    this.getCategory();
    console.log(this.adminList)
  },
  computed: {
    /**
     * パスの整形をする関数
     * @param  {String} URLの /admin/^^/ の部分
     * @return {String} ^^の部分
     */
    trimedPath: function() {
      return this.path.substring(7, this.path.length)
    }
  },
  methods: {
    getCategory() {
      this.path = this.$route.path
      axios
        .get(`/api/admin/${this.trimedPath}`)
        .then(response => {
          this.adminList = response.data;
        })
        .catch(error => {
          this.message = error;
        });
    },
    storeCategory() {
      this.path = this.$route.path
      axios
        .post(`/api/admin/${this.trimedPath}`)
        .then(response => {
          this.adminList = response.data;
        })
        .catch(error => {
          this.message = error;
        });
    },
    deleteCategory(id) {
      axios
        .delete(`/api/admin/${this.trimedPath}/${id}`)
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
