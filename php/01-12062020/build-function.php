<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $bang_diem = array(7, 5.5, 9, 6, 7.2, 7.8, 10, 5);
        sort($bang_diem);
        for($x = 0; $x < count($bang_diem); $x++) {
        echo $bang_diem[$x];
        echo "<br>";
        }
    ?>
</body>
</html>