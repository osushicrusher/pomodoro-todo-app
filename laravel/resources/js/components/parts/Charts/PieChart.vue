<template>
  <div>
    <canvas id="pieChart"></canvas>
  </div>
</template>

<script>
export default {
  name: 'pieChart',
  props: {
    monthObj: Object,
  },
  data() {
    return {

    }
  },
  created: function() {

  },
  mounted() {
    this.displayGraph()
  },
  methods: {
    displayGraph() {
      const ctx = document.getElementById('pieChart').getContext('2d');
      const pieChart = new Chart(ctx, {
        type: 'pie',
        data: {
          labels: this.monthObj.lebels,
          datasets: [{
            label: '四半期の売上数の遷移',
            data: this.monthObj.data
          }]
        }
      })
    },
  }
};
</script>
