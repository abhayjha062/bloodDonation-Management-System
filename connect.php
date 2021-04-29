<?php
    ob_start(); //Turns on output buffering
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bloodbank";

    //create connection
    $conn = mysqli_connect($servername, $username, $password,$db);

    //check connection
    if(!$conn) {
        die("connection failed".mysqli_connect_error());
    }
    //Create database
    /*$sql = "CREATE DATABASE bloodbank";
    if(mysqli_query($conn,$sql)) {
        echo "Database created sucessfully";
    } else {
        echo "Error creating database: ".mysqli_error($conn);
    }
    */

    // sql to create table
    /*$sql = "CREATE TABLE userInfo (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(30) NOT NULL,
        lname VARCHAR(30) NOT NULL,
        username VARCHAR(30) NOT NULL,
        profile_pic VARCHAR(255) NOT NULL,
        email VARCHAR(30) NOT NULL,
        phoneNumber VARCHAR(20) NOT NULL,
        age INT(10) NOT NULL,
        bloodgroup VARCHAR(30) NOT NULL,
        lastdonated DATE NOT NULL,
        latitude FLOAT(20) NOT NULL,
        longitude FLOAT(20) NOT NULL,
        password VARCHAR(40) NOT NULL,
        confirmPassword VARCHAR(40) NOT NULL
    )";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
*/
?>