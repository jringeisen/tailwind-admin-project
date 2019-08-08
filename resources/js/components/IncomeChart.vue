<script>
  import { Bar } from 'vue-chartjs'

export default {
  extends: Bar,
  data: () => ({
    chartdata: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [
        {
          label: 'Income',
          backgroundColor: '#e2e8f0',
          borderColor: '#4a5568',
          hoverBackgroundColor: '#4a5568',
          borderWidth: 2,
          data: [2000, 1900, 0, 2200, 2100, 2150]
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false
    }
  }),

  mounted () {
    this.renderChart(this.chartdata, this.options)
  }
}
</script>