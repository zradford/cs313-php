<?php 
   session_start();
   
   //initialize the cart class
   class Cart {
      public $cartItems = [];
      public $numItems = 0;
   }


   if(isset($_SESSION["cart"])){
      $myCart = new Cart;
   } else {
      $myCart = json_decode($_SESSION["cart"]);
   }

    

   // add the item to the cart
   //$myCart->$cartItems[] = $_REQUEST["item"];
   array_push( $myCart->$cartItems[] , $_REQUEST["item"] );
   $myCart->$numItems++;

   // put the whole cart in the session
   $_SESSION["cart"] = $myCart;


   // give the cart back to the js
   $returnCart = json_encode($myCart);
   echo $returnCart;
?>