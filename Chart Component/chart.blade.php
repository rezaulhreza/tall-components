<div x-data="{ chart: null }" x-init="
    chart = new Chart(document.getElementById('myChart').getContext('2d'), {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],//$wire.labels
        datasets: [{
          label: 'My First Dataset',
          data: [65, 59, 80, 81, 56, 55, 40],//$wire.sourceOfData
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }]
      },
      options: {}
    });
  ">
<h1>Dashboard</h1>
<hr>
    <canvas id="myChart" width="400" height="400"></canvas>
  </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
