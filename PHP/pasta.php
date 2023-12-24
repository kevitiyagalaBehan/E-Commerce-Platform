<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beverage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../CSS/product.css">

    <script src="../JS/product.js" defer></script>

</head>
<body>
    <header>
        <p class="logo">MELONY</p>
        <nav>
            <ul class="nav_links">
                <li><a href="home.php">Home</a></li>
                <li><a href="products.php">Add</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        <a class = "cta" href="cart.php"><button>Cart</button></a>
    </header>
    <div class="container">
        <h3 class="title">Pasta Products</h3>

        <div class="products-container">

            <div class="product" data-name="p-1">
                <img src="../Images/5.PNG" alt="">
                <h3>EGG NOODLES</h3>
                <div class="price">$8/-</div>
            </div>

            <div class="product" data-name="p-2">
                <img src="../Images/6.PNG" alt="">
                <h3>LASAGNA</h3>
                <div class="price">$6/-</div>
            </div>

            <div class="product" data-name="p-3">
                <img src="../Images/7.PNG" alt="">
                <h3>FUSSILI</h3>
                <div class="price">$7/-</div>
            </div>

            <div class="product" data-name="p-4">
                <img src="../Images/8.PNG" alt="">
                <h3>PENNE</h3>
                <div class="price">$6/-</div>
            </div>
        </div>
    </div>  

    <div class="products-preview">

        <div class="preview" data-target = "p-1">
            <i class="fa fa-times"></i>
            <img src="../Images/1.PNG" alt="">
            <h3>EGG NOODLES</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>Egg in pasta sauce with mozzarella cheese.</p>
            <div class="price">$8/-</div>
        </div>

        <div class="preview" data-target = "p-2">
            <i class="fa fa-times"></i>
            <img src="../Images/2.PNG" alt="">
            <h3>LASAGNA</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>( 200 )</span>
            </div>
            <p>A big warm comforting hug within layers of pasta, tomato sauce, white sauce and melted cheese.</p>
            <div class="price">$6/-</div>
        </div>

        <div class="preview" data-target = "p-3">
            <i class="fa fa-times"></i>
            <img src="../Images/3.PNG" alt="">
            <h3>FUSSILI</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 150 )</span>
            </div>
            <p>Italian-inspired tomato, garlic, and rapini pasta dish is delicious in spring.</p>
            <div class="price">$7/-</div>
        </div>

        <div class="preview" data-target = "p-4">
            <i class="fa fa-times"></i>
            <img src="../Images/4.PNG" alt="">
            <h3>PENNE</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>( 100 )</span>
            </div>
            <p>Fresh Salsa Pasta with Grilled Chipotle Honey Shrimp.</p>
            <div class="price">$6/-</div>
    </div>
</body>
</html>