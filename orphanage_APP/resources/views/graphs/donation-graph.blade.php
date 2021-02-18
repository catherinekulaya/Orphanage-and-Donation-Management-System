<canvas id="donationChart" width="400" height="50"></canvas>

<script>
    var ctx = document.getElementById('donationChart');
    var jan = @json($janDonations);
    var feb = @json($febDonations);
    var mar = @json($marDonations);
    var apr = @json($aprDonations);
    var may = @json($mayDonations);
    var jun = @json($junDonations);
    var jul = @json($julDonations);
    var aug = @json($augDonations);
    var sept = @json($septDonations);
    var oct = @json($octDonations);
    var nov = @json($novDonations);
    var dec = @json($decDonations);

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: 'Number of Donations',
                data: [jan, feb, mar, apr, may, jun, jul, aug, sept, oct, nov, dec],
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
