<?php


/* levels of errors:
        a) Notice: 
                -> The operation performed on the variables are executed
                -> It returns the notice information
                -> Line's of code are also executed after warning error
        b) Warning: 
                -> The operation performed on the variables are not executed 
                -> It returns the warning information
                -> Line's of code are also executed after warning error
        
        c) Error: 
                -> No line's of code will be executed before and after the error
                -> It returns the syntax error. If semicolon is missing
 */


echo "<br>";

$a = 10;

// $b = "10asasa"; //returns notice error 
// $b = "asasa10"; // returns warning error

$c = $a + $b;

echo $c;

echo "<br>";

echo "abc";

