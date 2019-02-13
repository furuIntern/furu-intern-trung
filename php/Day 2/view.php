<?php
$check = true;
//Check all required
foreach ($_POST as $key => $val) {
    if($key != 'note') {
        $check = (trim($val) != '')?$check:false;
    }
    echo "$key : $val <br/>";
    echo "<hr/>";
}

//Check Email
if(isset($_POST['email'])) { 
    $check = preg_match('/^[a-z][a-z 0-9]+@[a-z]{2,}(.[a-z 0-9])+$/',$_POST['email'])?$check:false;
}

//Check ID
if(isset($_POST['id'])) {
    $check = preg_match('/^[0-9]{5,}$/',$_POST['id'])?$check:false;
}

//Back to fill
if(!$check) {
    echo '<h2>Fill again <h2> </br>';
    echo "<a href='./task2.html'>Back</a>";
}

//Check fee
if($check) {
    if ($_POST['name'] == 'Nguyen Hoang Lam' || $_POST['id'] == '8723451' ){
        echo "<h2> Chua dong hoc phi ky 2 </h2>";
    }
}