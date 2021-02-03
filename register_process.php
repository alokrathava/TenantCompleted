<?php
require 'config.php';
// Data Fetch

$Name = $_POST['name'];
$Gender = $_POST['gender'];
$Address = $_POST['address'];
$Email = $_POST['email'];
$Password = $_POST['pass'];
$Phone = $_POST['phone'];
$Aadhar = $_POST['aadhar_number'];

$insert_sql = "INSERT INTO register(Name,Gender,Adress_line1,Phone,Email,Password,Aadhar_card_number)VALUES('$Name','$Gender','$Address','$Phone','$Email','$Password','$Aadhar')";
echo $insert_sql;

if ($conn->query($insert_sql) === TRUE) {
    // echo "Data Inserted";
    header('Location:login.php');
} else {
    header('Location:register.php');
}
?>
