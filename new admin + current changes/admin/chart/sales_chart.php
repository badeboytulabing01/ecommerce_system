
    <canvas id="salesChart" width="400" height="200"></canvas>
         
  <?php
        // Sample PHP code to fetch monthly sales data
       
        $sql1 = "SELECT MONTH(date_order) AS month, SUM(total) AS totalsales FROM orders WHERE status='success' GROUP BY MONTH(date_order)";
        $results2 = mysqli_query($conn, $sql1);
        $monthlySales = array_fill(0, 12, 0);
        while ($row2 = mysqli_fetch_assoc($results2)) {
            $month = (int)$row2['month'];
            $monthlySales[$month - 1] = (int)$row2['totalsales'];
        }

        mysqli_close($conn);
    ?>

    <script>
        // JavaScript to create and update the Chart.js line chart
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Sales',
                    data: <?= json_encode($monthlySales) ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
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
    </script>