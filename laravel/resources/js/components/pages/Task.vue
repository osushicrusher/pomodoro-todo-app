<template>
  <div>
      <label class="block text-left" style="max-width: 400px">
        <span class="text-gray-700">Select</span>
        <select class="form-select block w-full mt-1">
          <option v-for="goal in mainGoals" :key="goal.id">{{ goal.name }}</option>
        </select>
      </label>
      <register-task-form :selectedSGId="selectedSGId" class="absolute z-20 -translate-x-2/4 transform -translate-y-1/2 top-2/4 left-2/4" :class="{'hidden': !taskModal}"/>
      <register-sub-goals-form :selectedMGId="selectedMGId" class="absolute z-20 -translate-x-2/4 transform -translate-y-1/2 top-2/4 left-2/4" :class="{'hidden': !subGoalsModal}" />
      <!-- <Calendar /> -->

      <ul id="subGoals" class="grid grid-cols-3 gap-4 h-screen" v-show="subGoalsExist">
        <li @click="toggleModal(goal.id)" v-for="goal in subGoals" :key="goal.id" :style="{'background-color': goal.color}" class="bg-green-100 flex justify-center items-center">{{ goal.id ? goal.name : '+' }}</li>
        <li @click="toggleModal()" v-if="Object.keys(subGoals).length < 1"  class="flex justify-center items-center border-dashed border-4 border-light-blue-500">+</li>
        <li @click="toggleModal()" v-if="Object.keys(subGoals).length < 2"  class="flex justify-center items-center border-dashed border-4 border-light-blue-500">+</li>
        <li @click="toggleModal()" v-if="Object.keys(subGoals).length < 3"  class="flex justify-center items-center border-dashed border-4 border-light-blue-500">+</li>
        <li @click="toggleModal()" v-if="Object.keys(subGoals).length < 4"  class="flex justify-center items-center border-dashed border-4 border-light-blue-500">+</li>
        <li @click="toggleModal()" v-if="Object.keys(subGoals).length < 5"  class="flex justify-center items-center border-dashed border-4 border-light-blue-500">+</li>
        <li @click="toggleModal()" v-if="Object.keys(subGoals).length < 6"  class="flex justify-center items-center border-dashed border-4 border-light-blue-500">+</li>
        <li @click="toggleModal()" v-if="Object.keys(subGoals).length < 7"  class="flex justify-center items-center border-dashed border-4 border-light-blue-500">+</li>
        <li @click="toggleModal()" v-if="Object.keys(subGoals).length < 8"  class="flex justify-center items-center border-dashed border-4 border-light-blue-500">+</li>
        <li @click="toggleModal()" v-if="Object.keys(subGoals).length < 9"  class="flex justify-center items-center border-dashed border-4 border-light-blue-500">+</li>
      </ul>
      <div @click="closeModal()">
        <modal :class="{'hidden': !taskModal && !subGoalsModal}" />
      </div>
      <form action="/api/tasks/1" method="get">
        <button>送信</button>
      </form>
  </div>
</template>

<script>

import RegisterTaskForm from "../parts/Forms/RegisterTaskForm";
import RegisterSubGoalsForm from "../parts/Forms/RegisterSubGoalsForm";
import Modal from '../parts/Modal.vue';
import Calendar from "../parts/Calendar";
import PlusButton from "../parts/Buttons/PlusButton"

export default {
  data() {
    return {
      mainGoals: [],
      subGoals: [],
      tasks: [],
      taskModal: false,
      subGoalsModal: false,
      selectedSGId: null,
      subGoalsExist: false
    };
  },
  components: {
    RegisterSubGoalsForm,
    RegisterTaskForm,
    Modal,
    Calendar,
  },
  created() {
    this.getTasks()
  },
  mounted() {

  },
  computed: {
    selectedMGId() {
      for(let i=1; i < Object.keys(this.mainGoals).length+1; i++) {
        if(this.mainGoals[i]['isSetting']) {
          return this.mainGoals[i]['id']
        }
      }
    }
  },
  methods: {
    // createGoalDiv() {
    //   let lists = '';
    //   for (let i = this.subGoals.length; i < 9; i++) {
    //     lists +=
    //     `
    //     <li class="flex justify-center items-center border-2 border-gray-400 border-dashed">+</li>
    //     `
    //   }
    //   const subGoalsDiv = document.getElementById('subGoals');
    //   subGoalsDiv.innerHTML += lists;
    // },
    async getTasks() {
      try {
        const res = await axios.get('/api/tasks/1')
        this.mainGoals = res.data.main_goals
        this.subGoals = res.data.sub_goals
        this.tasks = res.data.tasks
        this.subGoalsExist = true
      } catch(err) {
        console.log(err)
      }
    },
    toggleModal(id) {
      // idが返ってきたらそのサブゴールに属しているタスクを表示する, undefinedならばサブゴール登録フォーム表示
      // if(this.taskModal === false) {
      //   if(id === undefined) {
      //     this.subGoalsModal = true
      //     return
      //   } else {
      //     this.selectedSGId = id
      //   }
      // }
      // this.taskModal = !this.taskModal
      // this.subGoalsModal = !this.subGoalsModal

      if(id === undefined) {
        this.subGoalsModal = !this.subGoalsModal
      } else {
        this.taskModal = !this.taskModal

      }
    },
    closeModal() {
      this.taskModal = false
      this.subGoalsModal = false
    }

  }
};
</script>
