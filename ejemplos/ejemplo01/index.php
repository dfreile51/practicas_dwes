<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
    <?php
        for ($i=1; $i<=10; $i++) {
            echo "<tr>";
            for ($j=1;$j<=5;$j++) {
                $num = rand(1,100);
                echo "<td>$num</td>";
            }
            echo "</tr>";
        }
        
    ?>
    </table>
</body>
</html>