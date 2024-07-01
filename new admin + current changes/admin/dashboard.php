<?php require_once ("../inc/db.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li class="active"><a href="dashboard.php">Dashboard</a></li>
                <li><a href="products.php">Product</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="customers.php">Customers</a></li>
                <li><a href="analytics.php">Analytics</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="header">
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="user-info">
                    <span>Moni Roy</span>
                    <span>Admin</span>
                </div>
            </header>
            
            <section class="dashboard-overview">
                <div class="overview-filters">
                    <button class="filter-button active">All Time</button>
                    <button class="filter-button">12 Months</button>
                    <button class="filter-button">30 Days</button>
                    <button class="filter-button">7 Days</button>
                    <button class="filter-button">24 Hour</button>
                </div>
                <div class="metrics">
                    <div class="metric-card">
                        <h3>Total Pending</h3>
                        <p class="metric-value">
                        <?php  $sql="SELECT count(id) AS total FROM orders WHERE status='pending'";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $full=$values['total']; echo (number_format($full));?>
                        </p>
                        <p class="metric-change up"></p>
                    </div>
                    <div class="metric-card">
                        <h3>Total Sales</h3>
                        <p class="metric-value">
                        <?php  $sql="SELECT sum(total) AS totalsales FROM orders WHERE status='success'";  $results=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($results); $sales=$values['totalsales']; echo (number_format($sales,2));?>
                        </p>
                        <p class="metric-change down"></p>
                    </div>
                    <div class="metric-card">
                        <h3>Total Order</h3>
                        <p class="metric-value">
                        <?php  $sql="SELECT count(id) AS total FROM orders WHERE status='success'";  $result1=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result1); $torder=$values['total']; echo (number_format($torder));?>
                        </p>
                        <p class="metric-change up"></p>
                    </div>
                    <div class="metric-card">
                        <h3>Total User</h3>
                        <p class="metric-value">
                        <?php  $sql="SELECT count(id) AS user FROM users";  $result2=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result2); $users=$values['user']; echo (number_format($users));?>
                        </p>
                        <p class="metric-change up"></p>
                    </div>
                </div>
            </section>
            
            <section class="sales-details">
                <h2>Sales Details</h2>
                <div class="chart">
                    <!-- Placeholder for the sales chart -->
                    <canvas id="salesChart"></canvas>
                </div>
            </section>
            
            <section class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example rows -->
                        <tr>
                            <td>#302012</td>
                            <td>Handmade Pouch +3 other products</td>
                            <td>1 min ago</td>
                            <td>John Bushmill<br>johnb@mail.com</td>
                            <td>$121.00</td>
                            <td>Mastercard</td>
                            <td><span class="status processing">Processing</span></td>
                            <td>
                                <button class="action-button edit">Edit</button>
                                <button class="action-button delete">Delete</button>
                            </td>
                        </tr>
                        <!-- Repeat rows as needed -->
                    </tbody>
                </table>
                <div class="pagination">
                    <button class="page-button">&laquo;</button>
                    <button class="page-button active">1</button>
                    <button class="page-button">2</button>
                    <button class="page-button">3</button>
                    <button class="page-button">4</button>
                    <button class="page-button">&raquo;</button>
                </div>
            </section>
        </main>

    </div>
   <?php require_once("chart/sale_anlytics.php") ?>

</body>
</html>

