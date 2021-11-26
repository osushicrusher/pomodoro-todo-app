
<template>
  <div lass="text-gray-600 body-font">
    <div @click="toggleCategorylModal()">
      <plus-button />
    </div>
    <div class="container px-5 py-24 mx-auto">
      <ul class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
        <li v-for="c in categories" :key="c.id" class="p-2 lg:w-1/3 md:w-1/2 w-full">
          {{ c.name }}
          <form action="/api/categories" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="DELETE">
            <button @click="deleteCategory(c.id)"><v-icon name="trash"/></button>
          </form>
        </li>
      </ul>
      <Pagination :from="from" :to="to" :total="total" :current_page="current_page" :pageNums="pageNums"/>
      <div @click="closeModal()">
        <Modal :class="{'hidden': !categoryModal}"/>
      </div>
      <div>
        <register-category-form action="/api/categories" class="absolute z-20 -translate-x-2/4 transform -translate-y-1/2" :class="{'hidden': !categoryModal}"/>
      </div>
    </div>
  </div>
</template>

<script>

import PlusButton from "../../parts/Buttons/PlusButton"
import Pagination from "../../parts/Pagination"
import Modal from "../../parts/Modal"
import RegisterCategoryForm from "../../parts/Forms/RegisterCategoryForm"
import { mapGetters } from 'vuex'

export default {
  data() {
    return {
      categoryModal: false
    }
  },
  components: {
    PlusButton,
    Pagination,
    Modal,
    RegisterCategoryForm
  },
  created: function() {
    this.$store.dispatch('categories/getCategory','1')
  },
  computed: {
    ...mapGetters({catObj: 'categories/catObj', categories: 'categories/categories',
    current_page: 'categories/current_page', last_page: 'categories/last_page',
    from: 'categories/from', to: 'categories/to',per_page: 'categories/per_page',
    total: 'categories/total', pageNums: 'categories/pageNums'})
  },
  methods: {
    getCategory() {
      axios
        .get(`/api/categories`)
        .then(response => {
          this.categories = response.data;
        })
        .catch(error => {
          this.message = error;
        });
    },
    storeCategory() {
      axios
        .post(`/api/categories`)
        .then(response => {
          this.categories = response.data;
        })
        .catch(error => {
          this.message = error;
        });
    },
    deleteCategory(id) {
      console.log('削除')
      axios
        .delete(`/api/categories/${id}`)
        .then(response => {
          this.gatCategory();
          this.message = "";
        })
        .catch(error => {
          this.message = error;
        });
    },
    /**
     * カテゴリ登録の際のモーダル開閉制御
     * @return void
     */
    toggleCategorylModal() {
      this.categoryModal = !this.categoryModal
    },
    closeModal() {
      this.categoryModal = false
    }
  }
};
</script>
