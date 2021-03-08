<?php
session_start();
$_SESSION['name'] = "Nalin";
echo $_SESSION['name'];

$_SESSION['hobbies'] = array(
    'one' => 'swimming',
    'two' => 'reading'
);