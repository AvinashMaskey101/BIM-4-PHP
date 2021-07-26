<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form</title>
</head>

<body>
    <h1>Login Form</h1>
    <hr>
    <?php
    if (isset($_SESSION, $_SESSION['error']) && !empty($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
    <br><br>
    <form action="validate.php" method="POST">
        User Email: <input type="email" name="user_email" placeholder="Enter your email address....." size="30"><br><br>
        Password: <input type="password" name="user_pass" placeholder="Enter your password...."><br><br>
        <input type="submit" value="Log In">

    </form>
</body>

</html>