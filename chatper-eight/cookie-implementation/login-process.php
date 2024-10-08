<?php
session_start();

$user = "admin@admin.com";
$password = "admin";

if (
    isset($_POST, $_POST['username'], $_POST['password']) && !empty($_POST['username']) &&
    !empty($_POST['password'])
) {
    //form submission
    $username = filter_var($_POST['username'], FILTER_VALIDATE_EMAIL);

    if (!$username) {
        $_SESSION['error'] = "Username should be of email type.";
        header('location: login.php');
        exit;
    }

    if ($username == $user && $_POST['password'] == $password) {
        //success
        $_SESSION['is_logged_in'] = true;

        if (isset($_POST['remember_me'])) {
            //cookie has been set with the name is_logged
            setcookie("is_logged", true, time() + 86400);
        }

        $_SESSION['success'] = "User logged in successfully.";
        header('location: profile.php');
        exit;
    } else {
        $_SESSION['error'] = "Credentials did not match.";
        header('location: login.php');
        exit;
    }
} else {
    $_SESSION['error'] = "Please login first.";
    header('location: login.php');
    exit;
}
