<template>
  <div class="container px-5 py-24 mx-auto text-gray-600 body-font">
    <search-bar />
    <span @click="toggleUserModal()">
      <add-user-button />
    </span>
    <span @click="toggleEmailModal()">
      <send-email-button />
    </span>
    <ul class="flex flex-wrap -m-2">
      <li v-for="u in users" :key="u.id" class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" :src="`${u.icon}`">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">{{ u.name }}</h2>
            <p class="text-gray-500">@{{ u.user_name }}</p>
          </div>
          <v-icon name="trash"/>
        </div>
      </li>
    </ul>
    <Pagination :from="from" :to="to" :total="total" :current_page="current_page" :pageNums="pageNums" />
    <div @click="closeModal()">
      <Modal :class="{'hidden': !userModal && !emailModal}"/>
    </div>
    <send-email-form action="/api/mail" class="absolute z-20 -translate-x-2/4 transform -translate-y-1/2" :class="{'hidden': !emailModal}"/>
    <register-user-form action="/api/users" class="absolute z-20 -translate-x-2/4 transform -translate-y-1/2" :class="{'hidden': !userModal}"/>
  </div>
</template>

<script>

import SearchBar from '../../parts/Inputs/SearchBar'
import AddUserButton from "../../parts/Buttons/AddUserButton"
import SendEmailButton from "../../parts/Buttons/SendEmailButton"
import SendEmailForm from "../../parts/Forms/SendEmailForm"
import RegisterUserForm from "../../parts/Forms/RegisterUserForm"
import Pagination from "../../parts/Pagination"
import Modal from "../../parts/Modal"

import { mapGetters } from 'vuex'


export default {
  data() {
    return {
      userModal: false,
      emailModal: false,
      err_msg: '',
    };
  },
  components: {
    SearchBar,
    AddUserButton,
    SendEmailButton,
    SendEmailForm,
    RegisterUserForm,
    Pagination,
    Modal
  },
  created: function() {
    this.$store.dispatch('users/getUser','1')
  },
  computed: {
    ...mapGetters({userObj: 'users/userObj', users: 'users/users',
    current_page: 'users/current_page', last_page: 'users/last_page', pageNums: 'users/pageNums',
    from: 'users/from', to: 'users/to',per_page: 'users/per_page', total: 'users/total'})
  },
  methods: {
    /**
     * ユーザーを取得する
     * @return void
     */
    getUser(page = null) {
      this.$store.dispatch('users/getUser', page)
    },
    /**
     * ユーザーを登録する
     * @return void
     */
    async registerUser() {

    },
    /**
     * ユーザーを削除する
     * @return void
     */
    async deleteUser(id) {
      axios
        .delete(`/api/categories/${id}`)
        .then(response => {
          this.gatCategory(this.current_page);
          this.err_msg = "";
        })
        .catch(error => {
          this.err_msg = error;
        });
    },
    /**
     * ユーザー登録の際のモーダル開閉制御
     * @return void
     */
    toggleUserModal(type=null) {
      this.userModal = !this.userModal
    },
    /**
     * ユーザー登録の際のモーダル開閉制御
     * @return void
     */
    toggleEmailModal() {
      this.emailModal = !this.emailModal
    },
    closeModal() {
      this.userModal = false
      this.emailModal = false
    }
    // getPageNums() {
    //   let numArr =[]
    //   for (let i = this.userObj.current_page; i <= this.userObj.last_page; i++) {
    //     numArr.push(i)
    //   }
    //   this.pageNums = numArr
    // }
  }
};
</script>
