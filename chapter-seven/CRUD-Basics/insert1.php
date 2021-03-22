<?php
/* Follow this steps to execute a query in database(manadate):
    a. Connect with db server and select your db
    b. Write SQL. For php, SQL are strings
    c. Execute SQL
    d. Optional. Fetch your data.
*/

//db connection
$conn = mysqli_connect("localhost", "root", "", "php_bim", 3307); 

//inserting single row at a time
$sql = "INSERT INTO users 
            SET 
            full_name = 'Dilip Gyawali',
            email = 'dg@gmail.com',
            address = 'Nepal',
            contact_number = 999999999
        ";

//executing a SQL query
$query = mysqli_query($conn, $sql); //this function returns true or false

if($query){
    //success
    echo "Data Inserted Successfully.";
}else{
    echo mysqli_error($conn); //this function prints db errors
}