<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="css/products.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#">Dashboard</a></li>
                <li class="active"><a href="#">Product</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Customers</a></li>
                <li><a href="#">Seller</a></li>
                <li><a href="#">Analytics</a></li>
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

            <section class="product-management">
                <h2>Products</h2>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>Product</th>
                            <th>SKU</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Added</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example rows -->
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Product Name</td>
                            <td>SKU12345</td>
                            <td>Watches</td>
                            <td>10</td>
                            <td>$13.13</td>
                            <td><span class="status low-stock">Low Stock</span></td>
                            <td>02/15/24</td>
                            <td>
                                <button class="action-button preview">Preview</button>
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
