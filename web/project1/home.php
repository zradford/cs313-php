<?php 
   include('dbconnect.php');
   $db = get_db();

   // getting the list of topics
   $query = 'SELECT topic_id, topic_title, user_id FROM topics';
   $statement = $db->query($query);
   $statement->execute();
   $topics = $statement->fetchALL(PDO::FETCH_ASSOC);
            

?> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Let's Talk</title>
   <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Rakkas" rel="stylesheet">
   <link href="project1.css" rel="stylesheet" type="text/css">
</head>
<body>
   <div class="nav rakkas">
      <a href="#">Home</a>
      
      <div class="nav-right">
         <a href="user.php">Me</a>
      </div>
   
   </div>
   <div class="wrapper">
      <div class="sidebar fjalla">
         <h1 class="rakkas center">My Topics</h1>
         <ul>
            <?php 
               foreach($topics as $topic) {
                  $id = $topic['topic_id'];
                  $name = $topic['topic_title'];
                  $user = $topic['user_id'];
                  echo "<li>$id - $name - $user</li>";
      }
            ?>
         </ul>
      </div>
      <div class="content fjalla">
         <h1 class="rakkas center">Topics of interest</h1>
         this will be filled with 10-20 topics from other users
      </div>
   </div>
</body>
</html>