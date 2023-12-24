<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../CSS/login_signup.css">
    
</head>
<body>
    <div class="center">

        <?php

            include("config.php");
            if(isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

            //verifying the unique email
            $verify_query = mysqli_query($conn, "SELECT Email FROM Users WHERE Email = '$email'");

            if(mysqli_num_rows($verify_query) != 0) {
                echo "<div class = 'message'>
                        <p>This email is already signed up, try with another!</p>
                    </div><br>";
                echo "<a href = 'javascript:self:history.back()'><button class = 'btn1'>Go Back</button></a>";
            } else {
                mysqli_query($conn, "INSERT INTO Users(Username, Email, Password) VALUES ('$username', '$email', '$password')") or die("Error occured");
                echo "<div class = 'message'>
                        <p>Registration successfull!</p>
                    </div><br>";
                echo "<a href = 'login.php'><button class = 'btn1'>Login Now</button></a>";
            } 
            } else {

        ?>

        <h1>Sign Up</h1>
        <form id = "signUpForm" action = "" method = "post">
            <div class="txt_field">
                <input type="text" id="username" name="username" autocomplete="off" required>
                <span></span>
                <label for="username">Username</label>
            </div>
            <div class="txt_field">
                <input type="email" id="email" name="email" autocomplete="off" required>
                <span></span>
                <label for="email">Email</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" name="password" autocomplete="off" required>
                <span></span>
                <label for="password">Password</label>
            </div>
            <div class="submit_button">
                <input type="submit" name="submit" class="btn" value="Sign Up" required>
            </div>
            <div class="submit_link">
                Already have an account? <a href="login.php">Log In</a>
            </div>
        </form>

        <?php } ?>
        
    </div>
</body>
</html>