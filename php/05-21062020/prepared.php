<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_laravel_11";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO Student (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

$firstname = "Nguyen";
$lastname = "Hoang";
$email = "nguyenhoang@gmail.com";
$stmt->execute();

$firstname = "Nguyen";
$lastname = "Roll";
$email = "nguyenroll@gmail.com";
$stmt->execute();

$firstname = "Van";
$lastname = "Thoai";
$email = "vanthoai@gmail.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>