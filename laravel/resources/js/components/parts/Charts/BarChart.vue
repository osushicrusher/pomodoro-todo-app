<template>
  <div>
    <canvas id="barChart">あああ</canvas>
  </div>
</template>

<script>
export default {
  name: 'barChart',
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
      const ctx = document.getElementById('barChart').getContext('2d');
      const barChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: this.monthObj.lebels,
          datasets: this.monthObj.datasets
        }
      })
    },
  }
};
</script>
