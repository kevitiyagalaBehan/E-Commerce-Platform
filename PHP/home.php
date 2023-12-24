<?php

    session_start();

    include("config.php");
    if(!isset($_SESSION['valid'])) {
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/main.css">
</head>

<body>
    <header>
        <div class="image-container">
            <img src="https://b.zmtcdn.com/web_assets/81f3ff974d82520780078ba1cfbd453a1583259680.png">
        </div>
        <div class="header-body-section">
            <nav class="nav">
                <div class="container container-nav">

                    <?php
                    
                        $id = $_SESSION['id'];
                        $query = mysqli_query($conn, "SELECT * FROM Users WHERE Id = '$id'");

                        while($result = mysqli_fetch_assoc($query)) {
                            $res_Uname = $result['Username'];
                            $res_Email = $result['Email'];
                            $res_id = $result['Id'];    
                        }
                    ?>

                    <ul>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </nav>
            <div class="header-body-content">
                <div class="container container-header-body">
                    <h1>MELONY</h1>
                    <h3>Discover the best food & beverages in Colombo</h3>
                </div>
            </div>
        </div>
    </header>
    <div class="items">
        <div class="item">
            <a href="pizza.php"><img src="https://www.daysoftheyear.com/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=cover%2Cheight=465%2Cq=70%2Csharpen=1%2Cwidth=1000/wp-content/uploads/pizza-day.jpg" alt="image"></a>
            <h3>Pizza</h3>
        </div>
        <div class="item">
            <a href="pasta.php"><img src="https://www.daysoftheyear.com/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=cover%2Cheight=465%2Cq=70%2Csharpen=1%2Cwidth=1000/wp-content/uploads/world-pasta-day1.jpg" alt="image"></a>
            <h3>Pasta</h3>
        </div>
        <div class="item">
            <a href="beverage.php"><img src="https://www.daysoftheyear.com/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=cover%2Cheight=465%2Cq=70%2Csharpen=1%2Cwidth=1000/wp-content/uploads/mojito-day.jpg" alt="image"></a>
            <h3>Beverages</h3>
        </div>
        <div class="item">
            <a href="fastfood.php"><img src="https://www.daysoftheyear.com/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=cover%2Cheight=465%2Cq=70%2Csharpen=1%2Cwidth=1000/wp-content/uploads/national-fast-food-day.jpg" alt="image"></a>
            <h3>Fast Foods</h3>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="column">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="column">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="column">
                <h2>Write Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </footer>
</body>

</html>