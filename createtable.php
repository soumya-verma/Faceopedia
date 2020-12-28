<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql1="CREATE DATABASE faces";
mysqli_query($conn,$sql1);
$sql2="USE faces";
mysqli_query($conn,$sql2);

$sql = "CREATE TABLE celebrities (
id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
label VARCHAR(50) NOT NULL,
image VARCHAR(500) NOT NULL,
name VARCHAR(50) NOT NULL,
dob DATE NOT NULL,
profession VARCHAR(50) NOT NULL,
detail VARCHAR(500) NOT NULL,
link VARCHAR(200) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>