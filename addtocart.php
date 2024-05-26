<!-- addtocart.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawfect Shoppe - Cart</title>
    <link rel="stylesheet" href="css/addtocart.css">
</head>
<body>
    <!-- Header Section -->
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
    
    <!-- Main Content -->
    <main>
        <div class="cart-container">
            <div class="cart-items">
                <h2>Cart Items</h2>
                <div id="cart-item-list"></div>
            </div>
            <div class="order-summary">
                <h3>Order Summary</h3>
                <div id="order-summary-details"></div>
                <button class="checkout-button">Checkout</button>
            </div>
        </div>
    </main>
    <script>
        // Retrieve cart details from localStorage
        const cart = JSON.parse(localStorage.getItem('cart'));

        if (cart) {
            // Display cart item
            const cartItemList = document.getElementById('cart-item-list');
            cartItemList.innerHTML = `
                <div class="cart-item">
                    <img src="path/to/product-image.jpg" alt="${cart.name}">
                    <div class="cart-item-details">
                        <h4>${cart.name}</h4>
                        <p>Price: ${cart.price}</p>
                        <p>Quantity: ${cart.quantity}</p>
                    </div>
                </div>
            `;

            // Display order summary
            const orderSummaryDetails = document.getElementById('order-summary-details');
            orderSummaryDetails.innerHTML = `
                <p>Subtotal: <span>${cart.price}</span></p>
                <p>Total: <span>${cart.price}</span></p>
            `;
        } else {
            document.getElementById('cart-item-list').innerText = 'No items in cart.';
            document.getElementById('order-summary-details').innerText = 'No items to summarize.';
        }
    </script>
</body>
</html>
