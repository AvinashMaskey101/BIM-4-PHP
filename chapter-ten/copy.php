<?php
$file_name_1 = "a.txt";
$file_name_2 = "b.txt";

$data = "Hello";

$fp = fopen($file_name_1, "w");
fwrite($fp, $data);

copy($file_name_1, $file_name_2);

$fp = fopen($file_name_2, "r");
$filesize = filesize($file_name_2);
$data = fread($fp, $filesize);
echo $data;