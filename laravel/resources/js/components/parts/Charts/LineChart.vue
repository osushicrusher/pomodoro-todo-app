<template>
  <div>
    <canvas id="lineChart">あああ</canvas>
  </div>
</template>

<script>
export default {
  name: 'lineChart',
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
      const ctx = document.getElementById('lineChart').getContext('2d');
      const lineChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: this.monthObj.lebels,
          datasets: [{
            label: '四半期の売上数の遷移',
            data: this.monthObj.datasets
          }]
        }
      })
    },
  }
};
</script>
