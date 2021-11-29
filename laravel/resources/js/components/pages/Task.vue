<template>
  <div>
      <label class="block text-left" style="max-width: 400px">
        <span class="text-gray-700">Select</span>
        <select class="form-select block w-full mt-1">
          <option v-for="goal in mainGoals" :key="goal.id">{{ goal.name }}</option>
        </select>
      </label>
      <!-- <RegisterTaskForm /> -->
      <!-- <Calendar /> -->

      <ul id="subGoals" class="grid grid-cols-3 gap-4 h-screen">
        <li @click="toggleTaskModal()" v-for="goal in subGoals" :key="goal.id" class="bg-green-100 flex justify-center items-center">{{ goal.id ? goal.name : '+' }}</li>
      </ul>
      <div @click="toggleTaskModal()">
        <modal :class="{'hidden': !taskModal}" />
      </div>
      <form action="/api/tasks/1" method="get">
        <button>送信</button>
      </form>
  </div>
</template>

<script>

import RegisterTaskForm from "../parts/Forms/RegisterTaskForm";
import Modal from '../parts/Modal.vue';
import Calendar from "../parts/Calendar";

export default {
  data() {
    return {
      mainGoals: [],
      subGoals: [],
      tasks: [],
      taskModal: false
    };
  },
  components: {
    RegisterTaskForm,
    Modal,
    Calendar
  },
  created() {

  },
  mounted() {
    this.getTasks()
  },
  methods: {
    createGoalDiv() {
      let lists = '';
      for (let i = this.subGoals.length; i < 9; i++) {
        lists +=
        `
        <li class="flex justify-center items-center border-2 border-gray-400 border-dashed">+</li>
        `
      }
      const subGoalsDiv = document.getElementById('subGoals');
      subGoalsDiv.innerHTML += lists;
    },
    async getTasks() {
      try {
        const res = await axios.get('/api/tasks/1')
        this.mainGoals = res.data.main_goals
        this.subGoals = res.data.sub_goals
        this.tasks = res.data.tasks
        this.createGoalDiv()
      } catch(err) {
        console.log(err)
      }
    },
    toggleTaskModal() {
      this.taskModal = !this.taskModal
    }
  }
};
</script>
