<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "04_19062020_aptech_php_23";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE table information(
    id int(6) unsigned auto_increment primary key,
    fname varchar(100),
    lname varchar(100),
    email varchar(100) unique,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if(mysqli_query($conn,$sql)){
    echo "table created successfully";
}else{
    echo "Error createing table:" .mysqli_error($conn);
}

mysqli_close($conn);