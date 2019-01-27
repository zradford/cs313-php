<?php
$page = basename($_SERVER['PHP_SELF']);
?>

<ul class="rakkas">
   <li><a class="<?php if($page == "store.php") {echo "active";}?>" href="store.php">Home </a></li>
   <!-- <li><a class="<?php if($page == "") {echo "active";}?>" href="contact.php">   </a></li>
   <li><a class="<?php if($page == "") {echo "active";}?>" href="">   </a></li> -->
   <li class="right"> <a class="" <?php if($page == "cart.php") {echo "active";}?>" href="cart.php">Cart</a></li>
</ul>
<div style="float: right; display:inline-block;" id="cartNum">
0 <a href="cart.php"> <img src="" alt="cart"> </a>
</div>
