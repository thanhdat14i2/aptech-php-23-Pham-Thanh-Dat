<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_laravel_11";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO Student (firstname, lastname, email)
VALUES ('Pham', 'Dat', 'thanhdat@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>