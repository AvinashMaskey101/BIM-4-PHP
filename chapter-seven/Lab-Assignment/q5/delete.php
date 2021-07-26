<?php
require_once 'connect.php';

$sql = "DELETE FROM details WHERE id = '2' ";

$query = mysqli_query($conn, $sql);

if($query){
    echo "Data of id. 2 deleted successfully.";
}else{
    echo mysqli_error($conn);
}