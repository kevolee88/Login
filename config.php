<?php

$user = 'root';
$password = 'root';
$db = 'personal_app';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
) or die('Cannot connect to database');

echo 'Connected to database';

?>
