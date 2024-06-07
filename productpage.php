<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="css/productpage.css">    
    <link rel="stylesheet" href="css/nav.css"> 
    <link rel="stylesheet" href="css/nav1.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/249726be58.js" crossorigin="anonymous"></script>
   
</head>
<body>
<section class="header">
     <?php include("inc/nav.php"); ?>
     <?php include("inc/nav1.php"); ?>
    </section>    
    <main>
        <div class="breadcrumbs">
            <a href="index.php">Home</a> > <span>Food</span>
        </div>
        <div class="product-header">
            <h1>Products</h1>
            <div class="sort-by">
                <label for="sort">Sort By:</label>
                <select id="sort">
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <option value="category3">Category 3</option>
                    <option value="category4">Category 4</option>
                    <option value="rating">Rating</option>
                </select>
            </div>
        </div>
        <div class="products-grid" id="products-grid">
            <!-- Product items will be dynamically inserted here -->
        </div>
        <div class="pagination">
            <button id="prev-page" disabled>Previous</button>
            <button id="next-page">Next</button>
        </div>
    </main>
    <?php include("footer.php"); ?>
    <script src="js/productpage.js"></script>
</body>
</html>
