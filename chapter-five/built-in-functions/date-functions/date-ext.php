<?php

$timezone = date_default_timezone_set('Asia/Kathmandu');

$date = date('Y-m-d h:i:s A');

$date = $date . " +7 days";
echo $date . "<br>";

$timestamp = strtotime($date); //timestamp works on the basis of base date (1970 january 1, 00:00:00)
//echo $timestamp;

$date = date('Y-m-d', $timestamp);
echo $date . "<br>";


/* Q. 25th of September, 2020 */
echo date('d\t\h F Y');