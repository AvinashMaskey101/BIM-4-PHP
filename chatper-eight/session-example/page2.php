<?php
require_once '../function.php';
session_start();

debug($_SESSION);
echo "<br>";
debug($_SESSION);

unset($_SESSION['name']);
echo "<br>";
debug($_SESSION);

session_destroy();
echo "<br>";

debug($_SESSION);

