<?php
session_start();

$name = "Manil Shakya";

$_SESSION['name'] = $name;
$_SESSION['hobbies'] = array(
    'one' => 'Playing guitar',
    'two' => 'Travelling'
);