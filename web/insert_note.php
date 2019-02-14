<?php 

$course_id = htmlspecialchars($_POST['course_id']);
$date = htmlspecialchars($_POST['date']);
$content = htmlspecialchars($_POST['content']);

//echo "trying to insert: courseid: $course_id, date: $date, content $content";
require_once('dbconnect.php');
   $db = get_db();

$query = 'INSERT INTO note (note_date, note_content, course_id) VALUES (:date, :content, :id)';
   $statement = $db->query($query);
   $statement->bindValue(':date', $date, PDO::PARAM_STR);
   $statement->bindValue(':content', $content, PDO::PARAM_STR);
   $statement->bindValue(':id', $course_id, PDO::PARAM_INT);
   $statement->execute();
   $course = $statement->fetch(PDO::FETCH_ASSOC);

   echo "$result";
   flush();
   header("Location:notes.php?course_id=$course_id");
   die();
?>