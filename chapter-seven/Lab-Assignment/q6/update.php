<?php
require_once 'connect.php';

$sql = "UPDATE details SET
        name = 'Shyam Nepali',
        address = 'Jhapa'
        WHERE id = '1' ";

$query = mysqli_query($conn, $sql);


if($query){
    echo "Data of id. 1 updated successfully.";
}else{
    echo mysqli_error($conn);

}