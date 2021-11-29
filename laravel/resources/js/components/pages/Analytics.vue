<template>
  <div>
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
      <div>
        <line-chart :monthObj="monthObj"/>
        <p>先月と比べてめっちゃ頑張ってますね！</p>
      </div>
      <div>
        <div>
          <bar-chart :monthObj="monthObj"/>
        </div>
      </div>
      <div>
        <pie-chart :monthObj="monthObj"/>
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
      <div>
        <line-chart :monthObj="monthObj"/>
        <p>先月と比べてめっちゃ頑張ってますね！</p>
      </div>
      <div>
        <div>
          <bar-chart :monthObj="monthObj"/>
        </div>
      </div>
      <div>
        <pie-chart :monthObj="monthObj"/>
      </div>
    </div>
  </div>
</template>

<script>

import BarChart from "../parts/Charts/BarChart.vue"
import LineChart from "../parts/Charts/LineChart"
import DoughnutChart from "../parts/Charts/DoughnutChart"
import PieChart from "../parts/Charts/PieChart"

export default {
  data() {
    return {
      monthObj: {
        lebels: ['8月1日', '8月2日', '8月3日', '8月4日'],
        datasets: [
          {
            label: 'A店 来客数',
            data: [62, 65, 93, 85, 51, 66, 47],
            backgroundColor: "rgba(219,39,91,0.5)"
          },
          {
            label: 'B店 来客数',
            data: [55, 45, 73, 75, 41, 45, 58],
            backgroundColor: "rgba(130,201,169,0.5)"
          },
          {
            label: 'C店 来客数',
            data: [33, 45, 62, 55, 31, 45, 38],
            backgroundColor: "rgba(255,183,76,0.5)"
          }
        ]
      },
      yearObj: {
        lebels: [],
        datasets: []
      },
      catObj: {
        lebels: [],
        datasets: []
      }
    }
  },
  components: {
    BarChart,
    LineChart,
    DoughnutChart,
    PieChart
  },
  created: function() {

  },
  methods: {

  }
};
</script>
