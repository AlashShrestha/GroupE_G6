<?php

include("db_conn.php");

if (isset($_POST['submit'])) {
    $login = $_POST['username'];
    $password = $_POST['pass'];
}

$check = "SELECT * from user WHERE username='$login' AND pass='$password'";

$result = $conn->query($check);

if ($result->num_rows == 0) {
    echo "Invalid";
} else {
    header("Location: index.php");
}
