<?php
require_once 'connect.php';

if (isset($_POST) && !empty($_POST)) {
    $sql = "UPDATE students
    SET
    name = '" . $_POST['uname'] . "', 
    email = '" . $_POST['uemail'] . "', 
    address = '" . $_POST['uaddress'] . "', 
    number = '" . $_POST['unum'] . "'
    
    WHERE id = " . $_GET['id'];

    //executing a query in database
    $query = mysqli_query($conn, $sql);

    if ($query) {
        //success
        header('location: select.php');
        exit;
    } else {
        echo mysqli_error($conn);
    }
}else{
    header('location: select.php');
    exit;
}
