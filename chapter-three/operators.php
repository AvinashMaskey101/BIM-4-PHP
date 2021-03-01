<?php
//operators are anything that is capable of doing any operations

/* 
    a) Arithematic Operator
        +, -, /, *, %, **

    b) Increment or Decrement Operator
        ++, --

    c) Concatenation/String Operator
        .  

    d) Assignment Operator
        =, +=, -=, *=, %=, /=, .=

    e) Comparison Operator:
        <, >, <=, >=, ==, !=, <> (NOT), === (Identical Operator), !== (Non-indentical Operator), <=> (Spaceship Operator)

    f) Logical Operator
            AND, OR, NOT
            &&,  ||, !

    g) Conditional Operator or Ternary Operator:
        (exp1) ? exp2 : exp3
    
*/

/* Increment or Decrement Operator */

/* $a = 10;

echo $a++;
echo "<br>";
echo $a; 
echo "<br>";
echo ++$a;  */

/* Concatenation/String Operator */

/* $fname = "MD";
$lname = "Siraj";

echo $fname. " " . $lname; */


 /* Assignment Operator */

/*  $a = 10;

//$a = $a + 1;
$a += 1;

echo $a; */

/* $fname = "Cristiano";
$lname = "Ronaldo";

$fname .= $lname; 
echo $fname; */

/*  Comparison Operator */

// = (value assign)
// == (value compare and test for equality)
// === (Identical Operator: compares the value along with data type)

$a = '1000';
$b = '1000';

$c = ""; //string null

/* php donot return false, null, string null */
// echo ($a == $b);
// echo intval($a != $b);

/* if($a === $b){
    echo "success";
}else{
    echo "failure";
} */

/* spaceship operator (<=>) 
    -> syntax: (x <=> y)
    -> If x < y, it returns -1
    -> If x = y, it returns 0
    -> If x > y, it returns 1

*/

/* $x = 20;
$y = 10;

echo ($x <=> $y); */

/* Conditional Operator or Ternary Operator */

/* $a = false;
$b = true;

echo ($a == $b) ? "true" : "false"; */

echo "<br>";

