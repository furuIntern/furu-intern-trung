<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <?php
            $arr = [
                [0,0,4,0],
                [0,3,5,0],
                [5,0,7,6],
                [1,2,3,0]
            ];
            $sum = 0;
            echo("<h3>Your matrix</h3>");
            foreach($arr as $y => $arrx) {
                foreach($arrx as $x => $val) {
                    if(!(isset($arr[$y-1][$x])&&$arr[$y-1][$x] ==0)){
                        $sum = $sum + $val;
                    }
                    echo($val.' ');
                }
                echo '<br/>';
            }
            echo("Result as required: $sum");
        ?>
    </div>
</body>
</html>