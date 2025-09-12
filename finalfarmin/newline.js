
    document.addEventListener("DOMContentLoaded", function() {
        // Sample data
        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        var profitData = [1000, 2000, 1000, 1240, 2053, 3472];
        var lossData = [456, 2000, 938,918,1000,2000];

        // Get the canvas element
        var ctx = document.getElementById('lineChart').getContext('2d');

        // Create the chart
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: months,
                datasets: [{
                    label: 'Profit',
                    data: profitData,
                    borderColor: 'green',
                    fill: false
                }, {
                    label: 'Loss',
                    data: lossData,
                    borderColor: 'red',
                    fill: false
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });

    

