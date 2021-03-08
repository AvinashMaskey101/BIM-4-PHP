<?php
session_start();
if (isset($_SESSION, $_SESSION['success']) && !empty($_SESSION['success'])) {
    echo $_SESSION['success'];
}else{
    $_SESSION['error'] = "You are not logged in.";
    header('location: login.php');
    exit;
}
?>
<br>
<a href="logout.php">Logout</a>