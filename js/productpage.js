// product_page.js

document.addEventListener('DOMContentLoaded', () => {
    const productsGrid = document.getElementById('products-grid');
    const sortSelect = document.getElementById('sort');
    const prevPageButton = document.getElementById('prev-page');
    const nextPageButton = document.getElementById('next-page');

    let currentPage = 1;
    const productsPerPage = 9;

    // Example product data
    const products = [
        { id: 1, name: 'Product 1', category: 'category1', rating: 4.5, price: '$10', img: 'img/product1.png' },
        { id: 2, name: 'Product 2', category: 'category2', rating: 4.0, price: '$20', img: 'img/product2.png' },
        { id: 3, name: 'Product 3', category: 'category3', rating: 4.7, price: '$30', img: 'img/product3.png' },
        { id: 4, name: 'Product 4', category: 'category4', rating: 3.8, price: '$40', img: 'img/product4.png' },
        { id: 5, name: 'Product 5', category: 'category1', rating: 4.9, price: '$50', img: 'img/product5.png' },
        { id: 6, name: 'Product 6', category: 'category2', rating: 4.3, price: '$60', img: 'img/product6.png' },
        { id: 7, name: 'Product 7', category: 'category3', rating: 4.1, price: '$70', img: 'img/product7.png' },
        { id: 8, name: 'Product 8', category: 'category4', rating: 3.5, price: '$80', img: 'img/product8.png' },
        { id: 9, name: 'Product 9', category: 'category1', rating: 4.8, price: '$90', img: 'img/product9.png' },
        { id: 10, name: 'Product 10', category: 'category2', rating: 4.2, price: '$100', img: 'img/product10.png' },
        { id: 11, name: 'Product 11', category: 'category3', rating: 3.9, price: '$110', img: 'img/product11.png' },
        { id: 12, name: 'Product 12', category: 'category4', rating: 4.6, price: '$120', img: 'img/product12.png' },
        { id: 13, name: 'Product 13', category: 'category4', rating: 4.8, price: '$150', img: 'img/product13.png' },
        // Add more products as needed
    ];

    function displayProducts() {
        productsGrid.innerHTML = '';
        const start = (currentPage - 1) * productsPerPage;
        const end = start + productsPerPage;
        const paginatedProducts = products.slice(start, end);

        paginatedProducts.forEach(product => {
            const productCard = document.createElement('div');
            productCard.classList.add('product-card');
            productCard.innerHTML = `
                <img src="${product.img}" alt="${product.name}">
                <h2>${product.name}</h2>
                <div class="rating">Rating: ${product.rating}/5</div>
                <div class="price">${product.price}</div>
            `;
            productCard.addEventListener('click', () => {
                window.location.href = `product_detail.php?id=${product.id}`;
            });
            productsGrid.appendChild(productCard);
        });

        prevPageButton.disabled = currentPage === 1;
        nextPageButton.disabled = end >= products.length;
    }

    function sortProducts() {
        const sortBy = sortSelect.value;
        if (sortBy === 'rating') {
            products.sort((a, b) => b.rating - a.rating);
        } else {
            products.sort((a, b) => a.category.localeCompare(b.category));
        }
        currentPage = 1;
        displayProducts();
    }

    sortSelect.addEventListener('change', sortProducts);
    prevPageButton.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            displayProducts();
        }
    });

    nextPageButton.addEventListener('click', () => {
        if ((currentPage * productsPerPage) < products.length) {
            currentPage++;
            displayProducts();
        }
    });

    // Initial display
    displayProducts();
});
