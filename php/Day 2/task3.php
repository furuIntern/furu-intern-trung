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
    <div class='container w-50 text-center'>
        <h4>Enter the number</h4>
        <form method='POST'>
            <input type="number" name="num" id="num" class='form-control' min='0'>
            <input type="submit" name='check' value="Check" class="btn btn-outline-primary my-3 w-50">
        </form>
        <div class='container w-75'>
        <?php
        if(!empty($_POST['num']) && isset($_POST['check'])){
            $num = $_POST['num'];
            echo "<h3>Detail</h3>";
            $propNum = $num%2==0?'Even':'Odd';
            echo "<br/> $propNum Number";
            $checkPrime = 2;
            while( $checkPrime < $num && $num % $checkPrime != 0) {
                $checkPrime++;
            }
            $resultPrime = $checkPrime == $num ? 'is':'is not';
            echo "<br/> This $resultPrime prime ";
            $factorial = 1;
            $factor = 1;
            while ($factor <= $num){
                $factorial = $factorial*$factor;
                $factor++;
            }
            echo "<br/>!$num = $factorial";
        }
                
        ?>
        </div>
    </div>
</body>
</html>