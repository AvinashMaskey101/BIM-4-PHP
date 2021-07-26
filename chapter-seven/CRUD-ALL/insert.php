<?php
/* Steps to follow in php database:
    
        a. Connect db server and select your db to perform the tasks
        b. Write SQL, for php SQL is string data
        c. Execute SQL
        d. Optional. Fetch your data
    */

//databse connection
require_once 'connect.php';

$sql = "INSERT INTO students
        SET
        name = '".$_POST['uname']."', 
        email = '".$_POST['uemail']."', 
        address = '".$_POST['uaddress']."', 
        number = '".$_POST['unum']."' 
        ";

//executing a query in database
$query = mysqli_query($conn, $sql); 

if($query){
    //success
    echo "Data Inserted Successfully.";
}else{
    echo mysqli_error($conn);
}
