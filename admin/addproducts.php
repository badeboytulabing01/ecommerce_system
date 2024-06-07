<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Add Product</title>
    <link rel="stylesheet" href="css/addproducts.css">
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
                <li class="active"><a href="#">Product</a>
                    <ul>
                        <li class="active"><a href="#">Product List</a></li>
                    </ul>
                </li>
                <li><a href="#">Categories</a></li>
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
            <section class="add-product">
                <div class="header-bar">
                    <button class="cancel-button">Cancel</button>
                    <h2>Add Product</h2>
                    <button class="add-button">+ Add Product</button>
                </div>
                <form class="product-form">
                    <div class="section">
                        <h3>General Information</h3>
                        <label>Product Name</label>
                        <input type="text" placeholder="Type product name here...">
                        <label>Description</label>
                        <textarea placeholder="Type product description here..."></textarea>
                    </div>

                    <div class="section">
                        <h3>Media</h3>
                        <div class="upload-box">
                            <input type="file" id="file-upload">
                            <label for="file-upload">Drag and drop image here, or click add image</label>
                        </div>
                    </div>

                    <div class="section">
                        <h3>Pricing</h3>
                        <label>Base Price</label>
                        <input type="text" placeholder="Type base price here...">
                        <label>Discount Type</label>
                        <select>
                            <option>Select a discount type</option>
                        </select>
                        <label>Discount Percentage (%)</label>
                        <input type="text" placeholder="Type discount percentage...">
                        <label>Tax Class</label>
                        <select>
                            <option>Select a tax class</option>
                        </select>
                        <label>VAT Amount (%)</label>
                        <input type="text" placeholder="Type VAT amount...">
                    </div>

                    <div class="section">
                        <h3>Inventory</h3>
                        <label>SKU</label>
                        <input type="text" placeholder="Type product SKU here...">
                        <label>Barcode</label>
                        <input type="text" placeholder="Product barcode...">
                        <label>Quantity</label>
                        <input type="text" placeholder="Type product quantity here...">
                    </div>

                    <div class="section">
                        <h3>Variation</h3>
                        <label>Variation Type</label>
                        <select>
                            <option>Select a variation</option>
                        </select>
                        <label>Variation</label>
                        <input type="text" placeholder="Variation...">
                        <button class="add-variant">+ Add Variant</button>
                    </div>

                    <div class="section">
                        <h3>Shipping</h3>
                        <label><input type="checkbox"> This is a physical product</label>
                        <label>Weight</label>
                        <input type="text" placeholder="Product weight...">
                        <label>Height</label>
                        <input type="text" placeholder="Height (cm)...">
                        <label>Length</label>
                        <input type="text" placeholder="Length (cm)...">
                        <label>Width</label>
                        <input type="text" placeholder="Width (cm)...">
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
