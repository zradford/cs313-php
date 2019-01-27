<?php 
   session_start();
?>
<?php include "storeHeader.php";?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Buy Now</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="store.css" />
   <script src="store.js"></script>
</head>
<body>
   <?php 
      $cart = json_decode($_SESSION["cart"]);
      foreach($cart as $item){
         echo "<div class='card fjalla'><img src='/pictures/$item.png><h1>$item<h1></div>";
      }
   ?>

   <a href="checkout.php"><button>Checkout</button></a>
</body>