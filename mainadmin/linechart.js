

  // Data
  const labels = ['Month 1', 'Month 2', 'Month 3', 'Month 4', 'Month 5', 'Month 6'];
  const profitData = [1000, 2874, 3848, 3738, 7838, 8363];
  const lossData = [828, 938, 938, 833, 93, 938];

  // Generate line chart
  const ctx = document.getElementById('line-chart').getContext('2d');
  const lineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [
        {
          label: 'Profit',
          data: profitData,
          borderColor: '#3bc59a', // Green color for profit
          fill: false
        },
        {
          label: 'Loss',
          data: lossData,
          borderColor: '#ff5733', // Red color for loss
          fill: false
        }
      ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

