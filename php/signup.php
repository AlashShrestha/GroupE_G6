<?php

include("db_conn.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}
$user = "public";

$insert = "INSERT INTO user_detail(name, phone, email, password, user) VALUES('$name', '$phone', '$email', '$password', '$user')";
$result = $conn->query($insert);

if (!$result) {
    header("Location :signup.php?error");
} else {
    header("Location: home.php");
}
