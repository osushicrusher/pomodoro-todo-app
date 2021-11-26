<template>
  <div>
    あ
    <!-- <v-calendar :columns="$screens({ default: 1, lg: 2 })" />
    <v-date-picker v-model="range" is-range /> -->
    <v-date-picker v-model="date">
      <template #default="{ inputValue, inputEvents }">
        <input class="px-3 py-1 border rounded" :value="inputValue" v-on="inputEvents" />
      </template>
    </v-date-picker>
  </div>
</template>

<script>

import VCalendar from 'v-calendar/lib/components/calendar.umd'
import VDatePicker from 'v-calendar/lib/components/date-picker.umd'

export default {
  data() {
    return {
      range: {
        start: new Date(2020, 0, 1),
        end: new Date(2020, 0, 5)
      },
      dates: [
        { start: new Date(2021, 11, 1), end: new Date(2021, 11, 30) },
        { start: new Date(2021, 11, 30), span: 5 } // # of days
      ]
    }
  },
  components: {
    VCalendar,
    VDatePicker
  },
  created: function() {

  },
  methods: {

  }
};
</script>
