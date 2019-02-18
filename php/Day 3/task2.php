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
                [1,1,1,0],
                [0,5,0,1],
                [2,1,3,10]
            ];
            $sum = 0;
            echo("<h3>Your matrix</h3>");
            for($y=0; $y< sizeof($arr); $y++) {
                for($x = 0; $x < sizeof($arr[0]);$x++) {
                    echo($arr[$y][$x].' ');
                    if(!(isset($arr[$y-1][$x])&&$arr[$y-1][$x] == 0)){
                        $sum = $sum + $arr[$y][$x];
                    } else {
                        $arr[$y][$x] = 0;
                    }
                }
                echo '<br/>';
            }
            echo("Result as required: $sum");
        ?>
    </div>
</body>
</html>
