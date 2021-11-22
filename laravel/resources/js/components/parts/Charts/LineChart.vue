<template>
  <div>
    <canvas id="lineChart">あああ</canvas>
  </div>
</template>

<script>
export default {
  name: 'lineChart',
  data() {
    return {
      labels : ['2019年1月', '2019年2月', '2019年3月', '2019年4月'],
      data: [120, 190, 34, 58]
    };
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
          labels: this.labels,
          datasets: [{
            label: '四半期の売上数の遷移',
            data: this.data
          }]
        }
      })
    },
  }
};
</script>
