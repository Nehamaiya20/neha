<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); //connection string

$username = $_POST['username'];
$password = $_POST['password'];
$email =$_POST['email'];
$phone = $_POST['phone'];


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO name (username,password,email,phone)
VALUES ('$username','$password','$email','$phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>