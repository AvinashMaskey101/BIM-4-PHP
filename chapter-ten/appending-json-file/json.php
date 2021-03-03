<?php
$file_name = "data.json";
$person = array(
    'name' => 'Mukti Shakya',
    'address' => 'Patan',
    'email' => 'mukti.shakya@gmail.com'
);

if (file_exists($file_name)) {
    //file has been created
    $old_data = file_get_contents($file_name);
    if ($old_data) {
        //not empty, already data exists
        $to_write = json_decode($old_data);
        $to_write[] = $person; 
    } else {
        //empty data
        $to_write = array(
            $person
        );
    }
} else {
    $to_write = array(
        $person
    );
}

$json_str = json_encode($to_write);

$success = file_put_contents($file_name, $json_str);

if ($success) {
    echo "File written successfully.";
} else {
    echo "Sorry! problem while wrirting a file.";
}

echo "<br><br>";

$data = file_get_contents($file_name);
echo $data;

$array = json_decode($data, true);

echo "<pre>";
print_r($array);
echo "</pre>";
