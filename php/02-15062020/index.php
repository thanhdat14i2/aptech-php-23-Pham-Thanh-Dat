<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,td{
            border: 1px solid black;
            padding: 50px;
        }
    </style>
</head>
<body>
    <?php
        $a = '1';
        $b = '1';
        $c = $a + $b;
        echo $c;
        $sp =[[],[],[],[]
        ]
    ?>
    <table>
        <?php for($i = 0; $i < count($sp); $i++) { ?>
            <tr>  
                <?php for($k = 0; $k < count($sp[1]); $k++) { ?>
                    <td> </td>
                <?php } ?>   
            </tr>
        <?php } ?>
        <!-- <thead>
            <tr>
                <td>
                    stt
                </td>
                <td>
                    ten
                </td>
                <td>
                    gia
                </td>
                <td>
                    nsx
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    1
                </td>
                <td>
                    <?php
                        echo($tensp[0])
                    ?>
                </td>
                <td>
                    <?php
                        echo($giasp[0])
                    ?>
                </td>
                <td>
                    <?php
                        echo($xuatsu[0])
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    1
                </td>
                <td>
                    <?php
                        echo($tensp[1])
                    ?>
                </td>
                <td>
                    <?php
                        echo($giasp[1])
                    ?>
                </td>
                <td>
                    <?php
                        echo($xuatsu[1])
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    1
                </td>
                <td>
                    <?php
                        echo($tensp[2])
                    ?>
                </td>
                <td>
                    <?php
                        echo($giasp[2])
                    ?>
                </td>
                <td>
                    <?php
                        echo($xuatsu[2])
                    ?>
                </td>
            </tr>
        </tbody> -->
    </table>
</body>
</html>