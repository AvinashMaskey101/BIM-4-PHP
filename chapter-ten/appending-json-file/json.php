<?php
$person = array(
        'name' => 'Avinash Maskey',
        'address' => 'Kathmandu',
        'email' => 'avinash.maskey11@gmail.com'
);

$person = array(
    $person
);

$json_str = json_encode($person);

$file_name = "users.json";

//writing a json file
$success = file_put_contents($file_name, $json_str);

if ($success) {
    echo "File written successfully.";
} else {
    echo "Sorry! problem while wrirting a file.";
}

echo "<br><br>";

//Reading a json file
$data = file_get_contents($file_name);
echo $data;

$array = json_decode($data, true);

echo "<pre>";
print_r($array);
echo "</pre>";
