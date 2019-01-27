<?php 
   session_start();
   
   // initialize the cart
   $_SESSION["numCartItems"] = 0;

   //initialize the items in the cart
   $cartItems[] = "";

   // if they already have that item, do nothing
   // else add it to the cart
   if( in_array($_REQUEST["item"], $cartItems){
      ;
   } else {
      $cartItems[] = $_REQUEST["item"];
      $_SESSION["numCartItems"] += 1;
   }

   // return the number of items in the cart.
   echo $_SESSION["numCartItems"]; 

?>