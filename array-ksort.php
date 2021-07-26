<?php
$arr = array(
    'one' => 'First Value',
    'two' => 'Second Value',
    'three' => 'Third Value',
    'four' => 'Fourth Value',
    'five' => 'Fifth Value',
    'six' => 'Sixth Value',
    'seven' => 'Seventh Value'
);

ksort($arr);
echo "The required output is: " . "<br>";

foreach ($arr as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>";
}
