<?php
include_once '../function.php';
session_start();

debug($_SESSION);

echo "<br>";

unset($_SESSION['name']);
debug($_SESSION);
echo "<br>";

session_destroy();
debug($_SESSION);
echo "<br>";