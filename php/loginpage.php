<?php

include("db_conn.php");

if (isset($_POST['submit'])) {
    $email = $_POST['username'];
    $password = $_POST['pass'];
}

$check = "SELECT * from user WHERE username='$email' AND pass='$password'";

$result = $conn->query($check);

if ($result->num_rows == 0) {
    echo "Invalid";
} else {
    header("Location: index.php");
}
