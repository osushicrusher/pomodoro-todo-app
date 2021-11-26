<template>
    <v-calendar />
</template>

<script>
export default {
  name: 'Calendar',
  data() {
    return {
      attrs: [
        {
          key: 'today',
          highlight: {
            backgroundColor: '#ff8080',
          },
          dates: new Date(),
          popover: {
            label: 'メッセージを表示できます',
          },
        }
      ],
    }
  }
};
</script>
