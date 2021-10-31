<template>
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    {{ text }}
  </button>
</template>

<script>
export default {
  props: {
    text: String
  },
  data() {
    return {

    };
  },
  created: function() {
    console.log(this.text)
  },
  methods: {

  }
};
</script>
