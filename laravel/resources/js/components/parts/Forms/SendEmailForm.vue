<template>
  <form :action="action" method="post" class="w-full max-w-lg p-3 bg-gray-50 absolute top-1/2 left-2/4">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3 mb-6 md:mb-0">
        <label for="from" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          送信者メールアドレス
        </label>
        <input v-model="user_info['from']" id="from" name="from" type="text" readonly class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
        <p class="err-msg">{{ err_msgs['from']}}</p>
      </div>
      <div class="w-full px-3 mb-6 md:mb-0">
        <label for="subject" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          タイトル
        </label>
        <input v-model="user_info['subject']" id="subject" name="subject" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
        <p class="err-msg">{{ err_msgs['subject']}}</p>
      </div>
      <div class="w-full px-3 mb-6 md:mb-0">
        <label for="content" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          本文
        </label>
        <textarea
          id="content"
          name="content"
          class="form-textarea mt-1 block w-full"
          rows="3"
        ></textarea>
        <p class="err-msg">{{ err_msgs['content']}}</p>
      </div>
    </div>
    <PrimaryButton @click.prevent="validateUserInfo()" buttonText="送信する"/>
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
        from: 'cytooon.official@gmail.com',
        subject: '',
        content: ''
      },
      err_msgs: {
        from: '',
        subject: '',
        content: ''
      }
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
    }
  }
};
</script>
