<?php
session_start();
require_once 'connect.php';

if (
    isset($_POST['user_email'], $_POST['user_pass']) &&
    !empty($_POST['user_email']) && !empty($_POST['user_pass'])
) {
    //form validations to prevent mysqli injection
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $uemail = validate($_POST['user_email']);
    $upass = validate($_POST['user_pass']);

    $sql = "SELECT * FROM login 
            WHERE email = '$uemail' AND password = '$upass' 
            ";

    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

    $count = mysqli_num_rows($query);
    
    if($count == 1){
        $_SESSION['success'] = "Login Successful.";
        header('location: profile.php');
        exit;
    }else{
        echo $_SESSION['error'] = "Login Unsuccessful.";
        header('location: login-form.php');
        exit;
    }

}else{
    $_SESSION['error'] = "Please enter your valid credentials.";
    header('location: login-form.php');
    exit;
}
