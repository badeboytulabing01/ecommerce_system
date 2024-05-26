function sortProducts() {
    const products = document.querySelectorAll('.product-card');
    const productsArray = Array.from(products);
    
    productsArray.sort((a, b) => {
        const ratingA = parseFloat(a.querySelector('.product-rating').textContent.split(' ')[1]);
        const ratingB = parseFloat(b.querySelector('.product-rating').textContent.split(' ')[1]);
        return ratingB - ratingA;
    });
    
    const parent = document.querySelector('.products-grid');
    parent.innerHTML = '';
    productsArray.forEach(product => parent.appendChild(product));
}
