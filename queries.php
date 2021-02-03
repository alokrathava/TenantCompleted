<?php
		// Queries
// Create User Register Table
	// $create_sql = "CREATE TABLE Register (id INT(5) AUTO_INCREMENT NOT NULL PRIMARY KEY, name VARCHAR(50) NOT NULL, gender enum('male','female') NOT NULL, adress_line1 VARCHAR(255) NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(15) NOT NULL, aadhar_car_number VARCHAR(15) NOT NULL)";
	// echo $create_sql;

// Create Book Resource Table
	$create_book_sql = "CREATE TABLE Book_Resource ( id INT(5) AUTO_INCREMENT NOT NULL PRIMARY KEY, r_name VARCHAR(20) NOT NULL, email VARCHAR(30) NOT NULL, r_price INT(5) NOT NULL, r_image VARCHAR(100000))";
	echo $create_book_sql;


?>