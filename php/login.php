<?php

include("db_conn.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$check = "SELECT * from user_detail WHERE email='$email' AND password='$password'";

$result = $conn->query($check);

if ($result->num_rows == 0) {
    echo "Invalid";
} else {
    header("Location: home.php");
}
