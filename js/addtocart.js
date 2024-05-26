const cartItemsContainer = document.querySelector('.cart-items');
const subtotalElement = document.getElementById('subtotal');
const discountElement = document.getElementById('discount');
const deliveryElement = document.getElementById('delivery');
const totalElement = document.getElementById('total');

let cart = [];

function addToCart(product) {
    cart.push(product);
    updateCart();
}

function updateCart() {
    cartItemsContainer.innerHTML = '';
    let subtotal = 0;

    cart.forEach((item, index) => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');

        cartItem.innerHTML = `
            <input type="checkbox" checked>
            <img src="${item.image}" alt="${item.name}">
            <div class="cart-item-details">
                <h4>${item.name}</h4>
                <p>Size: ${item.size}</p>
                <p>Color: ${item.color}</p>
                <p>$${item.price}</p>
            </div>
            <div class="cart-item-controls">
                <button onclick="decreaseQuantity(${index})">-</button>
                <input type="text" value="${item.quantity}" readonly>
                <button onclick="increaseQuantity(${index})">+</button>
                <button onclick="removeFromCart(${index})">🗑️</button>
            </div>
        `;

        cartItemsContainer.appendChild(cartItem);
        subtotal += item.price * item.quantity;
    });

    const discount = subtotal * 0.2;
    const deliveryFee = parseFloat(deliveryElement.innerText.replace('$', ''));
    const total = subtotal - discount + deliveryFee;

    subtotalElement.innerText = `$${subtotal.toFixed(2)}`;
    discountElement.innerText = `-$${discount.toFixed(2)}`;
    totalElement.innerText = `$${total.toFixed(2)}`;
}

function decreaseQuantity(index) {
    if (cart[index].quantity > 1) {
        cart[index].quantity--;
        updateCart();
    }
}

function increaseQuantity(index) {
    cart[index].quantity++;
    updateCart();
}

function removeFromCart(index) {
    cart.splice(index, 1);
    updateCart();
}
