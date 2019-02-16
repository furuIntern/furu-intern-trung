<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap.min.css"/>
    <title>Document</title>
</head>
<body class='container text-center'>
    <?php
    $arr = explode(' ',$_GET['num']);


    //checkPrime
    function checkPrime($num){
        $check = 2;
        while($check <= $num && $num%$check != 0){
            $check++;
        }
        return $check == $num;
    }


    //MAX
    if($_GET['method'] == 'max'){
        $max =$arr[0];
        $indexMax = 0;
        foreach($arr as $key=>$val){
            if($val>$max){
                $max = $val;
                $indexMax = $key;
            }
        }
        echo "The number at $indexMax is max number: $max";

    //Average    
    } elseif ($_GET['method'] == 'average'){
        $arg = 0;
        foreach ( $arr as $val){
            $arg = $arg + $val;
        }
        $arg = $arg/sizeof($arr);
        echo "Average: $arg";

    //Primemax    
    } elseif($_GET['method'] == 'primemax') {
        $primeMx = -1;
        foreach($arr as $val){
            if($val > $primeMx && checkPrime($val) ){
                $primeMx = $val;
            }
        }
        echo "Prime max: $primeMx";


    //Delte    
    } elseif ( $_GET['method'] == 'delete'){
        $index = explode(' ',$_GET['inDel']);
        echo('Numbers extant: ');
        foreach($index as $key){
            unset($arr[$key - 1]);
        }
        foreach($arr as $val){
            echo $val.'; ';
        }

    //Check symmetry    
    } elseif ($_GET['method'] == 'symmetry'){
        $length = sizeof($arr);
        $check = true;
        for ($key = 0; $key < $length/2 && $check; $key++){
            $check = $arr[$key] == $arr[$length - $key - 1];
        }
        $aler = $check?'is':'is not';
        echo("This $aler symmetry.");


    //Delete same number    
    } elseif($_GET['method'] == 'deleteSame') {
        echo('Number extant:');
        $count;
        foreach ($arr as $val) {
            $count = 0;
            foreach ($arr as $key => $valOther) {
                if ($valOther==$val) {
                    $count++;
                    if($count >= 2) {
                        unset($arr[$key]);
                    }
                }
            }
        }
        foreach ($arr as $val){
            echo(" $val");
        }
    }
    
    ?>
</body>
</html>