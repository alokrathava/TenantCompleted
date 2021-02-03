<?php

session_start();
require 'config.php';

// Fetch Data
$id = $_SESSION['id'];;
echo $phone = $_POST['number'];
$password = $_POST['password'];
$address = $_POST['address'];

// Query
$update_sql = "UPDATE Register SET Phone='$phone',Password='$password',Adress_line1='$address' WHERE id='$id'";
// echo $update_sql;


if (isset($_POST)) {
    if (mysqli_query($conn, $update_sql)) {
        header("location:index.php");
    } else {
        echo "ERROR: Could not able to execute $update_sql. ";
        header("location:profile.php");
    }
}

?>