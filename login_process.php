<?php
session_start();
require 'config.php';

// Data Fetch
$email = $_POST['email'];
$password = $_POST['password'];

// Query
$select_sql = "SELECT * FROM register Where Email='$email' ";
// echo $select_sql;

$result = $conn->query($select_sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $email_verify = $row['Email'];
        $password_verify = $row['Password'];
        $phone = $row['Phone'];
        $name = $row['Name'];
        $id = $row['id'];
        if ($email == $email_verify && $password == $password_verify) {
            $_SESSION["email"] = $email_verify;
            $_SESSION["name"] = $name;
            $_SESSION["id"] = $id;
            $_SESSION["phone"] = $phone;
            header('Location:index.php');

        } else {
            // echo "Invalid Credentials";
            header('Location:login.php');
        }
    }
}
?>