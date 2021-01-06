<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylsheet" href="assets/css/styleP.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>PAY PAGE</title>
  </head>
  <body>
  <div class="container">
 
  <form action="./create.php" method="post" id="payment-form">
  <div class="form-row">
  <h2 class="my-4 text-center">Payer Votre Commande</h2>
  <input type="text" name="nom" class="form-controle mb-3 StripeElement StripeElement--empty" placeholder="Nom">
  <input type="text" name="prénom" class="form-controle mb-3 StripeElement StripeElement--empty" placeholder="Prénom">
  <input type="email" name="email" class="form-controle mb-3 StripeElement StripeElement--empty" placeholder="email">
  
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display Element errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="assets/js/client.js"></script>
  </body>
</html>