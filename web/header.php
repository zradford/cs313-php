<?php
$page = basename($_SERVER[PHP_SELF]);
?>

<ul class="rakkas">
   <li><a class="<?php if($page == "home.php") {echo "active";}?>" href="home.php">Home</a></li>
   <li><a class="<?php if($page == "contact.php") {echo "active";}?>" href="contact.php">Contact</a></li>
   <li><a class="<?php if($page == "homework.php") {echo "active";}?>" href="homework.php">Classwork</a></li>
</ul>

