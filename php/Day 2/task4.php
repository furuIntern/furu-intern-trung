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
    <div class = "container mt-5">
        <h2>Cart</h2>
        <div class='card'>
            <div class='container'>
            <div class='row'>
                <div class='col-4'>
                    <img src="./cannon-750d.jpg" class='w-100' alt="">
                </div>
                <div class='col-8'>
                    <h4>Cannon 750</h4>
                    <form>
                        <div>Giá</div>
                        <input type="number" name="cost" id="cost" class='form-control' min='1000' step='1000'/>
                        <div>Số lượng</div>
                        <input type="number" name="count" id="count" class='form-control' min='1' step='1'/>
                        <div class='text-right my-3'>
                            <input type="submit" value="Checkout" name='checkout' class='btn btn-outline-info'>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                if(isset($_GET['checkout']) && !empty($_GET['cost']) && !empty($_GET['count'])){
                    $cost = $_GET['cost'];
                    $count = $_GET['count'];
                    $total = $cost*$count*1.1;
                    echo "<hr/>
                        <div class='container d-flex justify-content-between'>
                            <div>
                                <h4>Total :</h4>
                            </div>
                            <div>
                                $total vnđ
                            </div>
                        </div>
                        <div class='text-right text-muted font-italic'>
                            Included vat 10%
                        </div>";
                }
            ?>
            
        </div>
    </div>
</body>
</html>