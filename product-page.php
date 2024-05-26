<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawfect Shoppe</title>
    <link rel="stylesheet" href="css/product.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <h1>Pawfect Shoppe</h1>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Treats</a></li>
                    <li><a href="#">Supplies</a></li>
                    <li><a href="#">Pharmacy</a></li>
                </ul>
            </nav>
            <div class="cart">
                <a href="#">Cart</a>
                <span>Gretchen Stanton</span>
            </div>
        </div>
    </header>
    <main>
        <div class="breadcrumb">
            <a href="#">Home</a> > <a href="#">Food</a> > <span>Infraryns Ogilogi</span>
        </div>
        <h2>Infraryns Ogilogi</h2>
        <div class="sort-button">
            <button onclick="sortProducts()">Sort by Rating</button>
        </div>
        <div class="products-grid">
            <div class="product-card" onclick="location.href='#'">
                <div class="product-image"></div>
                <div class="product-details">
                    <p class="product-name">Product Name</p>
                    <p class="product-rating">⭐⭐⭐⭐ 4.5/5</p>
                    <p class="product-price">Price</p>
                </div>
            </div>
            <div class="product-card" onclick="location.href='#'">
                <div class="product-image"></div>
                <div class="product-details">
                    <p class="product-name">Product Name</p>
                    <p class="product-rating">⭐⭐⭐⭐ 4.2/5</p>
                    <p class="product-price">Price</p>
                </div>
            </div>
            <div class="product-card" onclick="location.href='#'">
                <div class="product-image"></div>
                <div class="product-details">
                    <p class="product-name">Product Name</p>
                    <p class="product-rating">⭐⭐⭐⭐⭐ 5.0/5</p>
                    <p class="product-price">Price</p>
                </div>
            </div>
            <div class="product-card" onclick="location.href='#'">
                <div class="product-image"></div>
                <div class="product-details">
                    <p class="product-name">Product Name</p>
                    <p class="product-rating">⭐⭐⭐ 3.5/5</p>
                    <p class="product-price">Price</p>
                </div>
            </div>
            <div class="product-card" onclick="location.href='#'">
                <div class="product-image"></div>
                <div class="product-details">
                    <p class="product-name">Product Name</p>
                    <p class="product-rating">⭐⭐⭐⭐ 4.0/5</p>
                    <p class="product-price">Price</p>
                </div>
            </div>
            <div class="product-card" onclick="location.href='#'">
                <div class="product-image"></div>
                <div class="product-details">
                    <p class="product-name">Product Name</p>
                    <p class="product-rating">⭐⭐⭐⭐⭐ 4.8/5</p>
                    <p class="product-price">Price</p>
                </div>
            </div>
            <div class="product-card" onclick="location.href='#'">
                <div class="product-image"></div>
                <div class="product-details">
                    <p class="product-name">Product Name</p>
                    <p class="product-rating">⭐⭐⭐⭐ 4.3/5</p>
                    <p class="product-price">Price</p>
                </div>
            </div>
            <div class="product-card" onclick="location.href='#'">
                <div class="product-image"></div>
                <div class="product-details">
                    <p class="product-name">Product Name</p>
                    <p class="product-rating">⭐⭐⭐ 3.8/5</p>
                    <p class="product-price">Price</p>
                </div>
            </div>
            <div class="product-card" onclick="location.href='#'">
                <div class="product-image"></div>
                <div class="product-details">
                    <p class="product-name">Product Name</p>
                    <p class="product-rating">⭐⭐⭐⭐⭐ 5.0/5</p>
                    <p class="product-price">Price</p>
                </div>
            </div>
        </div>
        <div class="view-all">
            <button onclick="location.href='#'">View All Products</button>
        </div>
    </main>
    <script src="js/product.js"></script>
</body>
</html>
