<?php 
   require_once('dbconnect.php');
   $db = get_db();

   $query = 'SELECT course_id, course_name, course_code FROM course';
   $statement = $db->query($query);
   $statement->execute();
   $courses = $statement->fetchALL(PDO::FETCH_ASSOC);
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Course</title>
</head>
<body>
   <h1>Notes App</h1>
   <h2>Courses</h2>
   <ul>
      <?php 
      
      foreach($courses as $course) {
         $id = $course['course_id'];
         $name = $course['course_name'];
         $code = $course['course_code'];
         echo "<li><a href='notes.php?course_id=$id'>$code - $name</a></li>";
      }

      ?>
   </ul>
</body>
</html>