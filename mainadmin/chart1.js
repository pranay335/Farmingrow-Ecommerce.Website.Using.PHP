
document.addEventListener("DOMContentLoaded", function() {
    // Data
    var months = ['Month 1', 'Month 2', 'Month 3', 'Month 4', 'Month 5', 'Month 6'];
    var profitData = [1000, 2000, 40000, 444000, 203330, 343332];
    var lossData = [456, 834, 938];

    // Chart.js Configuration
    var ctx = document.getElementById('profitLossChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: months,
            datasets: [{
                label: 'Profit',
                data: profitData,
                borderColor: '#4CAF50',
                backgroundColor: 'rgba(76, 175, 80, 0.2)',
                tension: 0.4,
                fill: true
            }, {
                label: 'Loss',
                data: lossData,
                borderColor: '#F44336',
                backgroundColor: 'rgba(244, 67, 54, 0.2)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    labels: {
                        color: '#ffffff'
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        color: '#555555'
                    },
                    ticks: {
                        color: '#ffffff'
                    }
                },
                y: {
                    grid: {
                        color: '#555555'
                    },
                    ticks: {
                        color: '#ffffff'
                    }
                }
            }
        }
    });
});

