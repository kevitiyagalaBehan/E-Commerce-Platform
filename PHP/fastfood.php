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
        <h3 class="title">Fast Food</h3>

        <div class="products-container">

            <div class="product" data-name="p-1">
                <img src="../Images/13.PNG" alt="">
                <h3>BURGER</h3>
                <div class="price">$6/-</div>
            </div>

            <div class="product" data-name="p-2">
                <img src="../Images/14.PNG" alt="">
                <h3>POTATO CHIPS</h3>
                <div class="price">$10/-</div>
            </div>

            <div class="product" data-name="p-3">
                <img src="../Images/15.PNG" alt="">
                <h3>SAMOSA</h3>
                <div class="price">$4/-</div>
            </div>

            <div class="product" data-name="p-4">
                <img src="../Images/16.PNG" alt="">
                <h3>HOT DOG</h3>
                <div class="price">$9/-</div>
            </div>
        </div>
    </div>  

    <div class="products-preview">

        <div class="preview" data-target = "p-1">
            <i class="fa fa-times"></i>
            <img src="../Images/13.PNG" alt="">
            <h3>BURGER</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>Delicious beef pepperoni in pizza sauce with a double layer of mozzarella cheese.</p>
            <div class="price">$6/-</div>
        </div>

        <div class="preview" data-target = "p-2">
            <i class="fa fa-times"></i>
            <img src="../Images/14.PNG" alt="">
            <h3>POTATO CHIPS</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>( 200 )</span>
            </div>
            <p>Rich tomato sauce base topped with cream cheese, onions, tomato, green chillies & Mozzarella</p>
            <div class="price">$10/-</div>
        </div>

        <div class="preview" data-target = "p-3">
            <i class="fa fa-times"></i>
            <img src="../Images/15.PNG" alt="">
            <h3>SAMOSA</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 150 )</span>
            </div>
            <p>Succulent pieces of beef pepperoni accompanied by black olives and spicy jalapenos topped with mozzarella cheese.</p>
            <div class="price">$4/-</div>
        </div>

        <div class="preview" data-target = "p-4">
            <i class="fa fa-times"></i>
            <img src="../Images/16.PNG" alt="">
            <h3>HOT DOG</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>( 100 )</span>
            </div>
            <p>Rich tomato sauce with a triple layer of mozzarella cheese.</p>
            <div class="price">$9/-</div>
    </div>
</body>
</html>