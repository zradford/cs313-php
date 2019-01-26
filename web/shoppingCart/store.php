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
   <script src="store.js"></script>
</head>
<body>
   <?php include 'storeHeader.php'?>
   <div class="storeItemWrapper">
      <div class="storeItem card">
         <img src="/pictures/kirby.png" alt="kirby">
         <div> 
            <h1>Kirby</h1>
            <p>$1,000</p>
            <button>Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card">
         <img src="/pictures/get_jiggy.png" alt="Jigglypuff">
         <div> 
            <h1>Jigglypuff</h1>
            <p>$10</p>
            <button>Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card">
         <img src="/pictures/ice_climbers.png" alt="Ice Climbers">
         <div> 
            <h1>Ice Climbers</h1>
            <p>$10 for each</p>
            <button>Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card">
         <img src="/pictures/izzy.png" alt="izzy">
         <div> 
            <h1>Isabelle</h1>
            <p>$10</p>
            <button>Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card">
         <img src="/pictures/mr_gamey.png" alt="Mr Game &amp; Watch">
         <div> 
            <h1>Mr. Game &amp; Watch</h1>
            <p>$20</p>
            <button>Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card">
         <img src="/pictures/munchy.png" alt="Petey Pirahna">
         <div> 
            <h1>Petey Pirahna</h1>
            <p>$100</p>
            <button>Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card">
         <img src="/pictures/net_boy.png" alt="Murabito">
         <div> 
            <h1>Villager</h1>
            <p>$10</p>
            <button>Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card">
         <img src="/pictures/pichupipi.png" alt="Pichu">
         <div> 
            <h1>Pichu</h1>
            <p>$10</p>
            <button>Add to Cart</button> 
         </div>
      </div>
      <div class="storeItem card">
         <img src="/pictures/yoshing.png" alt="Yoshi">
         <div> 
            <h1>Yoshi</h1>
            <p>$10</p>
            <button>Add to Cart</button> 
         </div>
      </div>
   </div>
</body>
</html>