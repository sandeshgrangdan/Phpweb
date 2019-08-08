<?php
echo '

    
<style>
* {
box-sizing:border-box;
}
body{
margin: 0;
font-family: monospace;
}
#preload {
width: 100%;
height: 100%;
background: rgba(96,49,111,1);
position: fixed;
top: 0;
left: 0;
z-index: 99999999;
opacity: 0.9;
 display: block;

}
.logo {
width: 60rem;
height: 70px;
margin: 150px auto 50px auto ;
font-size: 50px;
text-shadow: -10px 20px 20px #000000;
text-align: center;
color: azure;
}
.loader-frame {
width: 70px;
height: 70px;
margin: auto;
position: relative;
}
.loader1, .loader2, .loader3{
position: absolute;
/* border: 1rem solid transparent; */
border-radius: 50%;
}
.loader1 {
width: 8rem;
height: 8rem;
border-top: 6px solid #407831;
border-bottom: 5px solid #407831;
animation: clockwisespin 2s linear 3;
}
.loader2 {
width: 6rem;
height: 6rem;
border-left: 5px solid #f1b62e;
border-right: 5px solid #f1b62e;
top: 8px;
left: 5px;
animation: anticlockwisespin 2s linear 3;
}
.loader3 {
width: 9rem;
height: 9rem;
border-left: 5px solid rgb(255, 0, 0);
border-right: 5px solid rgb(255, 0, 0);
top: 8px;
left: 0px;
animation: anticlockwisespin 2s linear 3;
}
@keyframes clockwisespin {
from{transform: rotate(0deg);}
to{transform: rotate(360deg);}
}
@keyframes anticlockwisespin {
from {
    transform: rotate(0deg);
}

to {
    transform: rotate(-360deg);
}
}
@keyframes  fadeout{
from{opacity: 1;}
to {opacity: 0}
}
</style>
 
    <div class="preload" id="preload">
    <div class="logo">
       <span style="color:#f1b62e;"> Dherai-</span><span style="color: #407831">Sasto-</span><span style="color: rgb(255, 0, 0)">Deal</span>
    </div>
    <div class="loader-frame">
        <div class="loader1" id="loader1"></div>
        <div class="loader2" id="loader2"></div>   
        <div class="loader3" id="loader3"></div> 
    </div>
</div>
';

session_start();
  require_once('stripe/vendor/autoload.php');
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Customer.php');
  require_once('models/Transaction.php');

  \Stripe\Stripe::setApiKey('sk_test_zOFKtMY6DRKWVVBPr1tFRohx');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $first_name = $_SESSION["givenName"];
 $last_name = $_SESSION["familyName"];
 $email = $POST['email'];
 $token = $POST['stripeToken'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $_SESSION["full_price"]*100,
  "currency" => "usd",
  "description" => $_SESSION['description'],
  "customer" => $customer->id
));

// Customer Data
$customerData = [
  'id' => $charge->customer,
  'first_name' => $first_name,
  'last_name' => $last_name,
  'email' => $email
];

//Instantiate Customer
$customers = new Customer();

// Add Customer To DB
$customers->addCustomer($customerData);


// Transaction Data
$transactionData = [
  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'product' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
];

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
$transaction->addTransaction($transactionData);


echo '
    <script>
        document.getElementById("preload").style.display = "none";
    </script>
';

header('Location: success.php?tid='.$charge->id.'&product='.$charge->description.'&amount='.$charge->amount);
exit();
?>