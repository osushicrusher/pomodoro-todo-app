<template>
  <form action="/api/subgoals" method="POST" class="w-full max-w-lg bg-gray-50">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
          サブゴール名
        </label>
        <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
      </div>
      <div class="px-3">
        ♡
        <input type="hidden" name="liked" value="true"/>
      </div>
      <div class="px-3">
        <input type="checkbox" name="isSetting" value="true"/>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-2">
      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
          詳細
        </label>
        <textarea id="description" name="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text"></textarea>
      </div>
      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
          カラー
        </label>
        <compact-picker name="color" :value="colors" v-model="colors"/>
        <input type="hidden" name="color" :value="colors.hex" />
      </div>
    </div>
    <primary-button buttonText="登録する" />
    <input type="hidden" name="main_goal_id" :value="selectedMGId" />
  </form>
</template>

<script>

import PrimaryButton from '../Buttons/Base/PrimaryButton'
import {Compact} from 'vue-color'

export default {
  props: {
    selectedMGId: Number
  },
  data() {
    return {
      colors: {
        hex: '#194d33',
        hsl: { h: 150, s: 0.5, l: 0.2, a: 1 },
        hsv: { h: 150, s: 0.66, v: 0.30, a: 1 },
        rgba: { r: 25, g: 77, b: 51, a: 1 },
        a: 1
      }
    }
  },
  components: {
    PrimaryButton,
    'compact-picker': Compact
  },
  created: function() {

  },
  methods: {

  }
};
</script>
