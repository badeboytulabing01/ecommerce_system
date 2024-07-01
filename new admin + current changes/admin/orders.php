<?php require_once("../inc/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <link rel="stylesheet" href="css/orders.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="products.php">Product</a></li>
                <li class="active"><a href="orders.php">Orders</a></li>
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

            <section class="order-management">
                <h2>Orders</h2>
                <?php $view_query = mysqli_query($conn, "SELECT * FROM orders"); ?>
               
                <table class="order-table">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php while 
                       ($row = mysqli_fetch_assoc($view_query)):?>
                        <!-- Example rows -->
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><?=$row['id']?></td>
                            <td>Jan Jan</td>
                            <td><?=$row['date_order']?></td>
                            <td>Php <?=number_format($row['total']);?></td>
                            <td><?=$row['payment']?></td>
                            <td><span class="status processing"><?=$row['status']?></span></td>
                            <td>
                               <form method="POST">
                               <input type="hidden" name="id" value="<?=$row['id']?>">
                                <button type="submit" name="approved" id="approved" class="action-button preview">Approved</butto>
                                <button class="action-button preview">Preview</button>
                                <button class="action-button edit">Edit</button>
                                <button type="submit" name="archive" id="archive" class="action-button delete">Archive</button>
                               </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                        <!-- Repeat rows as needed -->
                    </tbody>
                </table>
                <div class="pagination">
                    <button class="page-button">&laquo;</button>
                    <button class="page-button active">1</button>
                    <button class="page-button">2</button>
                    <button class="page-button">3</button>
                    <button class="page-button">4</button>
                    <button class="page-button">5</button>
                    <button class="page-button">6</button>
                    <button class="page-button">7</button>
                    <button class="page-button">&raquo;</button>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
<?php 

if (isset($_POST['approved'])) {
  $id  = $_POST['id'];
  $select = "UPDATE orders  SET status = 'success' WHERE id  = '$id '";
  $result = mysqli_query($conn, $select);

  echo '<script = "text/javascript">';
  echo 'alert("Aproved");';
  echo 'window.location.href = "orders.php"';
  echo '</script>';
/*end of arcvie category*/
}

if (isset($_POST['archive'])) {
  $id  = $_POST['id'];
  $select = "UPDATE orders  SET status = 'archive' WHERE id  = '$id '";
  $result = mysqli_query($conn, $select);

  echo '<script = "text/javascript">';
  echo 'alert("Archive");';
  echo 'window.location.href = "orders.php"';
  echo '</script>';
/*end of arcvie category*/
}
   




 ?>