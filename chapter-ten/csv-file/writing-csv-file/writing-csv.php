<?php
//The headers
$headers = array(
    'Name',
    'Address'
);

//Array of data to be stored in a file
$data = array(
    array(
        'name' => 'Kist College',
        'address' => 'Kamalpokhari'
    ),
    array(
        'name' => 'Ncit College',
        'address' => 'Balkumari'
    )
);

//Open or create a file
$fh = fopen('file.csv', 'w');

//Create the headers
fputcsv($fh, $headers);

//Populate the table
foreach($data as $fields){
    fputcsv($fh, $fields);
}


//Close the file
fclose($fh);
