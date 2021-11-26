<template>
  <div>
    メール送信用ページaaaa
    <form action="/api/mail" method="POST">
      <textarea name="content" :value="content"></textarea>
      <button>送信する</button>
    </form>
  </div>
</template>

<script>

export default {
  data() {
    return {
      content: '',
      url: 'https://api.sendgrid.com/v3/mail/send'
    }
  },
  components: {

  },
  created: function() {

  },
  computed: {

  },
  methods: {
    // sendMail() {
    //   try {
    //     axios.post('/api/mail')
    //   } catch (error) {
    //     console.log(err.message)
    //   }
    // }
  }
};
</script>
