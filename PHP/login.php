<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login_signup.css">
</head>

<body>
    <div class="center">

        <?php
        
            include("config.php");
            if(isset($_POST['submit'])) {
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);

                $result = mysqli_query($conn, "SELECT * FROM Users WHERE Username = '$username' AND Password = '$password'") or die("Failed log in!");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)) {
                    $_SESSION['valid'] = $row['Username'];
                    $_SESSION['password'] = $row['Password'];
                    $_SESSION['id'] = $row['Id'];
                } else {
                    echo "<div class = 'message'>
                            <p>Invalid username or password!</p>
                          </div><br>";
                    echo "<a href = 'login.php'><button class = 'btn1'>Go Back</button></a>";
                }
                if(isset($_SESSION['valid'])) {
                    header("Location: home.php");
                }
            } else {
        
        ?>

        <h1>Login</h1>
        <form id = "loginForm" action = "" method = "post">
            <div class="txt_field">
                <input type="text" id="username" name="username" required>
                <span></span>
                <label for="username">Username</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label for="password">Password</label>
            </div>
            <div class="submit_button">
                <input type="submit" name="submit" class="btn" value="Login" required>
            </div>
            <div class="submit_link">
                Don't have an account? <a href="signUp.php">Sign Up</a>
            </div>
        </form>
        
        <?php } ?>

    </div>
</body>

</html>