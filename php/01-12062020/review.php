<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr, td{
            border: 1px solid black;
            padding: 30px;
        }
    </style>
</head>
<body>
    <?php
        $authors = 
        [
            [
                "dat",
                "18",
                "5"
            ],
            [
                "thoai",
                "18",
                "10"
            ],
            [
                "nguyen",
                "18",
                "15"
            ],
            [
                "phuong",
                "18",
                "11"
            ],
            [
                "hoang",
                "18",
                "1"
            ],
        ]; 
    ?>
    <table>
        <thead>
            <tr>
                <td>name</td>
                <td>age</td>
                <td>Post Counting</td>
                <td>Salary</td>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($authors);$i++) {?>
                <tr>
                    <?php for($j=0;$j<count($authors[1]);$j++) { ?>
                        <td><?php echo $authors[$i][$j] ?></td>
                    <?php } ?>
                    <td><?php echo end($authors[$i])*10000; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>