<?php
require_once 'connect.php';

$sql = "CREATE TABLE dummy (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            email VARCHAR(50) UNIQUE NOT NULL,
            address VARCHAR(30) NOT NULL,
            contact_number VARCHAR(20) NOT NULL
        )";

$query = mysqli_query($conn, $sql);

if($query){
    echo "Table created successfully.";
}else{
    echo mysqli_error($conn);
}