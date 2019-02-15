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
    <?php
    //check submit
    $checkSubmit = true;
    foreach ($_POST as $key => $val) {
        if(trim($val) == "" && $key != 'note') {
            echo("<div class='text-danger my-2'>$key is required </div>");
            $checkSubmit = false;
        }
    }
    if(!is_uploaded_file($_FILES['pic']['tmp_name'])) {
        echo("<div class='text-danger my-2'>Your picture is required </div>");
        $checkSubmit = false;
    }

    //Back to fill or show registration
    if (!$checkSubmit) {
       echo " <div class='list-group w-50 container'>
       <a href='task5.html' class='list-group-item list-group-item-action list-group-item-primary'>Back</a>
     </div>";
    }else {
        echo("<h3 class='my-3 text-success'> Success </h3>");
        foreach ($_POST as $key => $val) {
            if($key != 'submit'){
                echo("$key : $val <hr/>");
            }
        }
        $filename = $_FILES['pic']['name'];
        $filetmp = $_FILES['pic']['tmp_name'];
        $srcUpload = "uploads/$filename";
        move_uploaded_file($filetmp,$srcUpload);
        $srcUpload ='./'.$srcUpload;
        echo("<img src =$srcUpload  class='w-100'/>");

    }
    ?>
    </div>
</body>
</html>