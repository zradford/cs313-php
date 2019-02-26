<?php 
   session_start();
   include('dbconnect.php');
   

   if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $db = get_db(); 

      $username = htmlspecialchars($_POST['uname']);
      $password = htmlspecialchars($_POST['pword']);
      $hash_pass = password_hash($password, PASSWORD_DEFAULT);
      
      //get user info
      $query = "SELECT user_id, username FROM users WHERE username = :uname";
      $statement = $db->prepare($query);
      $statement->execute(array(":uname"=>$username));
      $users = $statement->fetchALL(PDO::FETCH_ASSOC);
      
      if($users['username'] == $username){
          echo "Please choose another username";
      } else {
         $query = "INSERT INTO users (user_id, username, creation_date, hashed_pass) VALUES (DEFAULT, :uname, now(), :hash_pass)";
         $statement = $db->prepare($query);
         $statement->bindValue(':uname', $username, PDO::PARAM_INT);
         $statement->bindValue(':hash_pass', $hash_pass, PDO::PARAM_INT);
         $statement->execute();
         $users = $statement->fetchALL(PDO::FETCH_ASSOC);
      }

   }
   


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="project1.css" rel="stylesheet" type="text/css">
   <title>Login</title>
</head>
<body>
   <div class="signupwrapper">
      <div class="signup">
         <form method="post" action="signup.php">
            Username <input type="text"      name="uname" placeholder="Username"> <br/>
            Password <input type="password"  name="pword" placeholder="********">
            <button type="submit">Sign Up</button>
         </form>
      </div>
   </div>
</body>
</html>