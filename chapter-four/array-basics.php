<?php
/* 
    -> collection of heterogenous data type
    -> data is stored as a comma separated value and key value pairs
    -> e.g. key => value
    -> last_index = size - 1
    -> user defined data type
 */


$name = "avinash maskey";
$email = "avinash.maskey11@gmail.com";
$address = "baneshwor";
$phone = 988888888;


/* two ways of defining an array */
$info = [
    "Kist College",
    "info@kist.edu.np",
    "Kamalpokari",
    14434178

];

/* echo "<pre>";
print_r($info);
echo "</pre>"; */

$info = array(
    "Kist College",
    "info@kist.edu.np",
    "Kamalpokari",
    14434178
);

/* 
   Array can be classified into two parts:

    a) Single Dimensional 
    b) Multi Dimensional


    Types of array in php:
    a) Indexive Array
    b) Asscociative Array
    c) Multi-dimensional Array

*/

/* Indexive array or Numeric arrays */

$data = array(
    "avinash maskey", 
    "avinash.maskey11@gmail.com", 
    "baneshwor", 
    988888888888
);

/* echo "<pre>";
print_r($data);
echo "</pre>"; */


/* Associative array */

$person = array(
    'name' => "avinash maskey", 
    'email' => "avinash.maskey11@gmail.com", 
    'address' => "baneshwor", 
    'phone' => 988888888888
);


/* echo "<pre>";
print_r($person);
echo "</pre>"; */

// echo $person['name'];


