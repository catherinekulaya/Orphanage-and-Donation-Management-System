<canvas id="visitationChart" width="200" height="100"></canvas>
<script>
    var ctx = document.getElementById('visitationChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: 'Number of Visitations',
                data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                backgroundColor: "#3e95cd",
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    barThickness: 30,
                    maxBarThickness: 20,
                    gridLines: {
                        display: false,
                    },
                }, ],
                yAxes: [{
                    gridLines: {
                        display: false,
                    },
                }, ],
            }
        }
    });

</script>
