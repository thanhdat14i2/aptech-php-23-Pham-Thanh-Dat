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
VALUES ('Le','Son','nana99999@gmail.com')";

if(mysqli_query($conn,$sql)){
    $last_id = mysqli_insert_id($conn);
    echo "new record created successfully" .$last_id;
}else{
    echo "fail, can't create new record" . mysqli_error($conn) .$sql;
}

mysqli_close($conn);

