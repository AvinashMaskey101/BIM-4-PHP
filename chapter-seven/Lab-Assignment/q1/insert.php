<?php
//databse connection
require_once 'connect.php';

$sql = "INSERT INTO users
        SET
        name = '".$_POST['uname']."', 
        age = '".$_POST['uage']."'
        ";

//executing a query in database
$query = mysqli_query($conn, $sql); 

if($query){
    //success
    echo "Data Inserted Successfully.";
}else{
    echo mysqli_error($conn);
}
