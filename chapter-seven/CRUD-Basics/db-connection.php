<?php

//database connection
$conn = mysqli_connect("localhost", "root", "", "php_bim", 3307); //this function returns an mysqli Object

//to see how the object is returned debug this 
/* echo "<pre>";
print_r($conn);
echo "</pre>"; 
exit; */

/* if($conn){
    echo "Database connected successfully.";
}else{
    echo mysqli_error($conn); //this function prints db errors
} */
