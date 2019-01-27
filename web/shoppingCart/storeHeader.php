<?php
$page = basename($_SERVER['PHP_SELF']);
?>

<ul class="rakkas">
   <li><a class="<?php if($page == "store.php") {echo "active";}?>" href="store.php">Home </a></li>
   <!-- <li><a class="<?php if($page == "") {echo "active";}?>" href="contact.php">   </a></li>
   <li><a class="<?php if($page == "") {echo "active";}?>" href="">   </a></li> -->
   <li>
      <a class="<?php if($page == "cart.php") {echo "active";}?>" href="cart.php">Cart</a>
      <div style="display:inline-block;" id="cartNum">
      0 
      </div>
   </li>
</ul>

