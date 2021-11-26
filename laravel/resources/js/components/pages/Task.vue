<template>
  <div>
      タスク画面です
      <register-task-form style="display:none"/>
      <Calendar style="display:none"/>
  </div>
</template>

<script>

import RegisterTaskForm from "../parts/Forms/RegisterTaskForm";
import Calendar from "../parts/Calendar";

export default {
  data() {
    return {

    };
  },
  components: {
    RegisterTaskForm,
    Calendar
  },
  created: function() {

  },
  methods: {

  }
};
</script>
