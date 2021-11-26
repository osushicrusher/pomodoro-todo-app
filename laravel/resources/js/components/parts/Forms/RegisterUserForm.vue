<template>
  <form :action="action" method="post" enctype="multipart/form-data" class="w-full max-w-lg p-3 bg-gray-50 absolute top-1/2 left-2/4">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          名前
        </label>
        <input v-model="user_info['name']" id="name" name="name" type="text" placeholder="Jane" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
        <p class="err-msg">{{ err_msgs['name']}}</p>
      </div>
      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="is_admin">
          権限
        </label>
        <div class="relative">
          <div>
            <label class="inline-flex items-center">
              <input value="true" id="is_admin" name="is_admin" type="checkbox" class="form-checkbox">
              <span class="ml-2">管理者</span>
            </label>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="user-id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          ユーザーID
        </label>
        <input v-model="user_info['user_id']" id="user_id" name="user_id" type="text" placeholder="Jane" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
        <p class="err-msg">{{ err_msgs['user_id']}}</p>
      </div>
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label for="user-id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          メールアドレス
        </label>
        <input v-model="user_info['email']" id="email" name="email" type="text" placeholder="Jane" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
        <p class="err-msg">{{ err_msgs['email']}}</p>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label for="password" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          パスワード
        </label>
        <input v-model="user_info['password']" id="password" name="password" type="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <p class="err-msg">{{ err_msgs['password']}}</p>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label for="password-verified" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          パスワードを再確認
        </label>
        <input v-model="user_info['password_verified']" id="password-verified" name="password-verified" type="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <p class="err-msg">{{ err_msgs['password_verified']}}</p>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <input @change="fileSelected" type="file" id="file" name="file" class="form-control">
        <button type="submit">アップロード</button>
      </div>
    </div>
    <PrimaryButton @click.prevent="validateUserInfo()" buttonText="登録する"/>
  </form>
</template>

<script>

import PrimaryButton from '../Buttons/Base/PrimaryButton.vue'

export default {
  props: {
    action: String
  },
  data() {
    return {
      adminChecked: true,
      user_info: {
        name: '',
        is_admin: '0',
        user_id: '',
        email: '',
        password: '',
        password_verified: ''
      },
      err_msgs: {
        name: '',
        is_admin: '',
        user_id: '',
        email: '',
        password: '',
        password_verified: ''
      },
      fileInfo: ''
    };
  },
  components: {
    PrimaryButton
  },
  created: function() {
    // console.log((Object.values(this.user_info).includes('')))
  },
  methods: {
    validateUserInfo() {
      if(Object.values(this.user_info).includes('')) return false

      let check = true
      // name(長さ)

      // is_admin(不正なvalue)

      // email

      // password(長さ、文字数字からなるか)

      // password_verified(passwordと一致するか)

      if(check === false) {
        return false;
      }
    },
    fileSelected(e) {
      this.fileInfo = e.target.files[0]
    }
  }
};
</script>
