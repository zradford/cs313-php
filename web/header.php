<?php
if(basename(__FILE__) == "home.php"){
   echo "<ul>
   <li><a href=\"home.php\" style=\"background-color:#C1C1C1\">Home</a></li>
   <li><a href=\"contact.php\">Contact</a></li>
   <li><a href=\"homework.php\">Classwork</a></li>
   </ul>";
} elseif (basename(__FILE__) == "contact.php") {
    echo "<ul>
    <li><a href=\"home.php\">Home</a></li>
   <li><a href=\"contact.php\" style=\"background-color:#C1C1C1\">Contact</a></li>
   <li><a href=\"homework.php\">Classwork</a></li>
   </ul>";
} elseif (basename(__FILE__) == "homework.php"){
    echo "<ul><li><a href=\"home.php\">Home</a></li>
   <li><a href=\"contact.php\">Contact</a></li>
   <li><a href=\"homework.php\" style=\"background-color:#C1C1C1\">Classwork</a></li></ul>";
}

ini_set(‘display_errors’, 1);
?>