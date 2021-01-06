<?php
require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51I5dNvAcjqjfnY0yodOxSJp8myQ8e81r6NKuqfEZx7aVouUFCcNngY9ULXuUtnrl598rRK64KPwxQuPIr0nFkcSn00gYoMkT0e');
// Sanitize POST Array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['nom'];
$last_name = $POST['prénom'];
$email = $POST['email'];
$token = $POST['stripeToken'];
// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
  ));
  
  // Charge Customer
  $charge = \Stripe\Charge::create(array(
    "amount" => 5000,
    "currency" => "USD",
    "description" => "paiement de commande",
    "customer" => $customer->id
  ));
//redirect to success
header('location: success.php?tid= '.$charge->id. '&product='.$charge->description);
?>