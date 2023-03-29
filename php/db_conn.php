<?php
$host = "localhost:3307";
$user = "root";
$password = '';
$db_name = "tms";

$conn = mysqli_connect($host, $user, $password, $db_name);

$conn = new mysqli($host, $user, $password, $db_name);

if (!$conn) {
    echo "Connection Failed";
}
