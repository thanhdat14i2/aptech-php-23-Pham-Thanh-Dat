<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "04_19062020_aptech_php_23";
        $a = $_POST['fname'];
        $b = $_POST['lname'];
        $c = $_POST['email'];

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn){
            die("concection Fail: " . mysqli_connect_error());
        }


        $sql = "INSERT INTO information(fname,lname,email)
        VALUES ('$a','$b','$c')";

        if(mysqli_query($conn,$sql)){
            echo "new record created successfully";
        }else{
            echo "fail, can't create new record" . mysqli_error($conn) .$sql;
        }
        mysqli_close($conn);
    ?>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "04_19062020_aptech_php_23";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn){
            die("concection Fail: " . mysqli_connect_error());
        }

        $sql = "SELECT id, lname, fname, email FROM information";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "id: " . $row["id"]. " - Name: " . $row["lname"]. " " . $row["fname"]. "<br>";
            }
        } else {
            echo "0 result";
        }
        mysqli_close($conn);
    ?>
</body>
</html>

