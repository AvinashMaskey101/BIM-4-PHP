<?php
function sum($one, $two)
{
    $sum = 0;
    echo "Even numbers occured between the parameters: <br>";
    for ($i = $one; $i <= $two; $i++) {
        if($i % 2 == 0){
            echo $i . "<br>";
            $sum += $i;
        }
    }
    echo "The sum of all even numbers occured between the parameter is: " . $sum;
}

sum(10, 20);
