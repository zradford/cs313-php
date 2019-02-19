<?php 
   include('dbconnect.php');
   

   if($SERVER['REQUEST_METHOD'] == 'POST') {
      $db = get_db(); 

      $username = htmlspecialchars($_POST['uname']);
      $password = htmlspecialchars($_POST['pword']);
      
      //get user info
      $query = "SELECT user_id, username FROM users WHERE username = :uname";
      $statement = $db->query($query);
      $statement->execute(array(":uname"=>$username));
      $users = $statement->fetchALL(PDO::FETCH_ASSOC);
      
      echo "good morning";
      var_dump($users);
   }



?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Login</title>
</head>
<body>
   <form method="post" action="signup.php">
      Username <input type="text"      name="uname" placeholder="Username"> <br/>
      Password <input type="password"  name="pword" placeholder="********">
      <button type="submit">Sign Up</button>
   </form>
</body>
</html>