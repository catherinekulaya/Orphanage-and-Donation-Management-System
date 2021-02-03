<canvas id="donationChart" width="400" height="50"></canvas>

<script>
    var ctx = document.getElementById('donationChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: 'Number of Donations',
                data: [120, 110, 93, 50, 70, 39, 120, 45, 33, 75, 68, 123],
                backgroundColor: "#8e5ea2",
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    barThickness: 100,
                    maxBarThickness: 50,
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
