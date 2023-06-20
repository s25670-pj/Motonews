<?php

$host = "localhost";
$user = "root";
$pass = "root";
$database = "blogdb";

$conn = new MySQLi($host, $user, $pass, $database);

if($conn -> connect_error)
{
    die("Database connection error: " . $conn -> connect_error);
}
