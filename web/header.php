<?php
$path_parts = pathinfo()
echo $path_parts['dirname'], "\n";
echo $path_parts['basename'], "\n";
echo $path_parts['extension'], "\n";
echo $path_parts['filename'], "\n";
// if(__FILE__ == "home.php"){
//    echo "<ul>
//    <li><a href=\"home.php\" style=\"background-color:#C1C1C1\">Home</a></li>
//    <li><a href=\"contact.php\">Contact</a></li>
//    <li><a href=\"homework.php\">Classwork</a></li>
//    </ul>";
// } elseif (__FILE__ == "contact.php") {
//     echo "<ul>
//     <li><a href=\"home.php\">Home</a></li>
//    <li><a href=\"contact.php\" style=\"background-color:#C1C1C1\">Contact</a></li>
//    <li><a href=\"homework.php\">Classwork</a></li>
//    </ul>";
// } elseif (__FILE__ == "homework.php"){
//     echo "<ul><li><a href=\"home.php\">Home</a></li>
//    <li><a href=\"contact.php\">Contact</a></li>
//    <li><a href=\"homework.php\" style=\"background-color:#C1C1C1\">Classwork</a></li></ul>";
// }

// ?>
<!-- // <ul><li><a href="home.php">Home</a></li>
//    <li><a href="contact.php">Contact</a></li>
//    <li><a href="homework.php">Classwork</a></li></ul> -->