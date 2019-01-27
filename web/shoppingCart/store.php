<?php 
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Buy Now</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="store.css" />
   <script src="addToCart.js"></script>
</head>
<body>
   <?php include 'storeHeader.php'?>
   <div class="storeItemWrapper">
      <div class="storeItem card fjalla">
         <img src="/pictures/kirby_cute.png" alt="kirby" width="200px">
         <div> 
            <h1>Kirby</h1>
            <p>$1,000</p>
            <button onclick="addToCart('kirby')" >Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card fjalla">
         <img src="/pictures/get_jiggy.png" alt="Jigglypuff" width="200px">
         <div> 
            <h1>Jigglypuff</h1>
            <p>$10</p>
            <button onclick="addToCart('Jigglypuff')" >Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card fjalla">
         <img src="/pictures/ice_climbers.png" alt="Ice Climbers" width="200px">
         <div> 
            <h1>Ice Climbers</h1>
            <p>$10 for each</p>
            <button onclick="addToCart('Ice')" >Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card fjalla">
         <img src="/pictures/izzy.png" alt="izzy" width="200px">
         <div> 
            <h1>Isabelle</h1>
            <p>$10</p>
            <button onclick="addToCart('Isabelle')" >Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card fjalla">
         <img src="/pictures/mr_gamey.png" alt="Mr Game &amp; Watch" width="200px">
         <div> 
            <h1>Mr. Game &amp; Watch</h1>
            <p>$20</p>
            <button onclick="addToCart('Gnw')" >Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card fjalla">
         <img src="/pictures/munchy.png" alt="Petey Pirahna" width="200px">
         <div> 
            <h1>Petey Pirahna</h1>
            <p>$100</p>
           <button onclick="addToCart('Pirahna')" >Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card fjalla">
         <img src="/pictures/net_boy.png" alt="Murabito" width="200px">
         <div> 
            <h1>Villager</h1>
            <p>$10</p>
            <button onclick="addToCart('Villager')" >Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card fjalla">
         <img src="/pictures/pichupipi.png" alt="Pichu" width="200px">
         <div> 
            <h1>Pichu</h1>
            <p>$10</p>
            <button onclick="addToCart('Pichu')" >Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card fjalla">
         <img src="/pictures/yoshing.png" alt="Yoshi" width="200px">
         <div> 
            <h1>Yoshi</h1>
            <p>$10</p>
            <button onclick="addToCart('Yoshi')" >Add to Cart</button>
         </div>
      </div>
   </div>
</body>
</html>