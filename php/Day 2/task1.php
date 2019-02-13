<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card my-5 p-3">
            <form action="./task1.php" method='POST'>
                <label for="username">User name</label>
                <input type="text" name="username" id="username" class="form-control">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" class="form-control">
                <div class="text-center">
                    <input type="submit" value="Login" class="btn btn-primary mt-3" >
                </div>
            </form>
            </div>
        </div>
    </div>
    <?php
$username = 'admin';
$pass = '12345';
if(isset($_POST['username']) && isset($_POST['pass'])) {
    $checkLogin = ($username == $_POST['username'] && $pass == $_POST['pass']);
    if ($checkLogin) {
    echo "<div class='text-center text-success'> Done !!! </div>";
    } else {
    echo "<div class='text-center text-danger'> Fill again !!! </div>";
    }
}

?>
</body>
</html>
