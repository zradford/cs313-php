










<?php 
   require_once('dbconnect.php');
   $db = get_db();

   $course_id = htmlspecialchars($_GET['course_id']);

   #get course from the db
   #:id is a place holder
   #bindValue will change :id to what you want and make sure it's the right thing, 
   #protect against sql injection
   $query = 'SELECT course_id, course_name, course_code FROM course WHERE course_id=:id';
   $statement = $db->prepare($query);
   $statement->bindValue(':id', $course_id, PDO::PARAM_INT);
   $statement->execute();
   $course = $statement->fetch(PDO::FETCH_ASSOC);
   
   $query  = 'SELECT course_id, note_date, note_content FROM note WHERE course_id=:course_id';
   $statement = $db->prepare($query);
   $statement->bindValue(':course_id', $course_id, PDO::PARAM_INT);
   $statement->execute();
   $notes = $statement->fetchAll(PDO::FETCH_ASSOC);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Notes</title>
</head>
<body>
<?php 
$course_name = $course["course_name"];
$course_code = $course["course_code"];
echo "<h1>Notes for $course_code - $course_name</h1>";

?>

<form action="insert_note.php" method="post">
    <input type="date" name="date" /><br/>
    <input type="hidden" name="course_id" value="<?php echo $course_id ?>">
    <textarea name="content"></textarea><br />
    <input type="submit" value="Insert Note">
</form>

<?php 
   foreach($notes as $note) {
   $date = $note['date'];
   $content = $note['content'];

   echo "<p>Date: $date</p>";
   echo "<p>$content</p>";
   }
      
?>
</body>
</html>