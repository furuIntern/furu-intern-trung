<!--Phuc Trung - 21/1/2019-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task1</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./form.js"></script>
</head>
<body onload="fadeIn()">
 <div id = "container">  
    <div class="title">
        <img id ="bootstrapLogo"src="./bootstrap-solid.png" alt="">
        <h1>Checkout form</h1>
        <p>Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>
    <form action="" id="form" >
        <h3>Billing address</h3>
        <div class = "name">
            <div>First name</div>
            <input class ="fninput required" type="text">
            <div class="alert" style="padding-left : 5px; color:red;"></div>
        </div>
        <div class = "name">
                <div>Last name</div>
                <input type="text" class="required">
                <div class="alert" style="padding-left : 5px; color:red;"></div>
        </div>
        <div>Username</div>
        <input type="text" placeholder="Username" class="required">
        <div class="alert" style="padding-left : 5px; color:red;"></div>
        <div >Email</div>
        <input id="email" type="text" placeholder="you@example.com">
        <div id= "email-alert" style="padding-left : 5px; color:red;"></div>
        <div>Address</div>
        <input type="text" class="required" placeholder="1234 Main St">
        <div class="alert" style="padding-left : 5px; color:red;"></div>
        <div >Address 2</div>
        <input id="address2" type="text" placeholder="Apartment or suit">
        <div class = "country">
            <div>Country</div>
            <select name="#" id="#">
                <option value="unchoiced">Choose...</option>
                <option value="#">United State</option>
            </select>
        </div>
        <div class = "state">
                <div>State</div>
                <select name="#" id="#">
                    <option value="unchoiced">Choose...</option>
                    <option value="#">California</option>
                </select>
            </div>
        <div class = "zip">
                <div>Zip</div>
                <input type="text" class="required">
                <div class="alert" style="padding-left : 5px; color:red;"></div>
        </div>
        <div style ="clear: both"></div>
        <div class="line">
            <label >
                <input type="checkbox" >Shipping address is the same as my billing
            </label>
            <label>
                <input type="checkbox" >Save this information for next time  
            </label>
            
        </div>
        <div class="line">
            <h2>Payment</h2>
            <label >
                <input type="radio" name="card" checked> Credit card
            </label>
            <label >
                <input type="radio" name="card" > Debit card
            </label>
            <label>
                <input type="radio" name="card" > PayPal
            </label>
            <div style="margin:15px 0px;">
                <div class = "name">
                    <div>Name on card</div>
                    <input class ="fninput required" type="text">
                    <div class="alert" style="padding-left : 5px; color:red;"></div>
                    <div style="color:grey;">Full name as displayed on card
                    </div>
                    <div style="width : 90%; margin-top: 15px;">
                        <div class = "name" >
                            <div>Expiration</div>
                            <input class ="fninput required" type="text">
                            <div class="alert" style="padding-left : 5px; color:red;"></div>
                        </div>
                        <div class = "name">
                                <div>CVV</div>
                                <input type="text" class="required">
                                <div class="alert" style="padding-left : 5px; color:red;"></div>
                        </div>
                    </div>
                </div>
                <div class = "name">
                        <div>Credit card number</div>
                        <input type="text" class="required">
                        <div class="alert" style="padding-left : 5px; color:red;"></div>
                </div>
            </div> 
        </div>
        <div style="clear:both"></div>
        <div class="line">
            <input style ="background-color: steelblue; width: 100%;border: white solid 1px; border-radius: 10px ; height : 40px; color: white"type="button" onclick="start()"z value="Continue to checkout">
        </div>
    </form>
    <div class = "card">
        <H1>Your cart</H1>
        <ul>
            <li>
                <div><h3>Product name</h3>Brief decription</div>
                <div class="cost">$12</div>
            </li>
            <div class ="crawLine"></div>
            <li>
                <div><h3>Second product</h3>Brief decription</div>
                <div class="cost">$12</div>
            </li>
            <div class ="crawLine"></div>
            <li>
                <div><h3>Third item</h3>Brief decription</div>
                <div class="cost">$12</div>
            </li>
            <div class ="crawLine"></div>
            <li style=" color: green;">
                <div><h3>Promo code</h3>Brief decription</div>
                <div class="cost">$12</div>
            </li>
            <div class ="crawLine"></div>
            <li>
                    <div>Total(USD)</div>
                    <div class="cost">$20</div>
            </li>
        </ul>
        <form action="" style="border : solid grey 1px; width: 100%; height: 50px; border-radius: 10px; margin-top: 20px ">
            <div style="overflow:auto;display: inline-block; position: relative; left: 50%; top:50%; transform: translate(-50%,-50%)">
                <input type="text" placeholder="Promo code" style="width: 150px; float:left; height: 28px; border-top-right-radius: 0px;border-bottom-right-radius: 0px">
                <input type="button" value="Redeem" style="float:left; width: 60px; border: none; height: 34px;border-top-right-radius: 10px;border-bottom-right-radius: 10px; background-color: grey;" >
            </div>
        </form>
    </div>
    <div style="clear:both"></div>
    <div style="text-align:center; margin: 60px 0px 60px 0px;">
        <div>© 2017-2018 Company Name
        </div>   
        <a href="#">Privacy</a>
        <a href="#">Tern</a>
        <a href="#">Support</a>
    </div>
 </div> 
</body>
</html>