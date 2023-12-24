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
        <h3 class="title">BEVERAGES</h3>

        <div class="products-container">

            <div class="product" data-name="p-1">
                <img src="../Images/9.PNG" alt="">
                <h3>BLACK COFFEE</h3>
                <div class="price">$5/-</div>
            </div>

            <div class="product" data-name="p-2">
                <img src="../Images/10.PNG" alt="">
                <h3>MOJITO</h3>
                <div class="price">$4/-</div>
            </div>

            <div class="product" data-name="p-3">
                <img src="../Images/11.PNG" alt="">
                <h3>MILKSHAKE</h3>
                <div class="price">$6/-</div>
            </div>

            <div class="product" data-name="p-4">
                <img src="../Images/12.PNG" alt="">
                <h3>POMEGRANATE</h3>
                <div class="price">$7/-</div>
            </div>
        </div>
    </div>  

    <div class="products-preview">

        <div class="preview" data-target = "p-1">
            <i class="fa fa-times"></i>
            <img src="../Images/1.PNG" alt="">
            <h3>BLACK COFFEE</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>richy oroginal black coffee</p>
            <div class="price">$5/-</div>
        </div>

        <div class="preview" data-target = "p-2">
            <i class="fa fa-times"></i>
            <img src="../Images/10.PNG" alt="">
            <h3>MOJITO</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>( 200 )</span>
            </div>
            <p>with white rum, fresh mint leaves, sugar syrup, club soda and limes.</p>
            <div class="price">$4/-</div>
        </div>

        <div class="preview" data-target = "p-3">
            <i class="fa fa-times"></i>
            <img src="../Images/11.PNG" alt="">
            <h3>MILKSHAKE</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 150 )</span>
            </div>
            <p>full-fat ice cream will yield the creamiest and smoothest milkshake.</p>
            <div class="price">$6/-</div>
        </div>

        <div class="preview" data-target = "p-4">
            <i class="fa fa-times"></i>
            <img src="../Images/12.PNG" alt="">
            <h3>POMEGRANATE</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>( 100 )</span>
            </div>
            <p>Fresh Pomegranate with ice cream</p>
            <div class="price">$7/-</div>
        </div>

    </div>
</body>
</html>