<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "04_19062020_aptech_php_23";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("concection Fail: " . mysqli_connect_error());
}

$sql = "INSERT INTO information(fname,lname,email)
VALUES ('Le','Son','leson@gmail.com'),
('Tran','Tu','trantu@gmail.com'),
('NGuyen','Lan','nguyenlan@gmail.com')";

if(mysqli_query($conn,$sql)){
    echo "new record created successfully";
}else{
    echo "fail, can't create new record" . mysqli_error($conn) .$sql;
}

mysqli_close($conn);

