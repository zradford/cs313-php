<?php 
session_start();
include('dbconnect.php');
$db = get_db();


if(! empty( $_POST )) {

   if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
      //security
      $username = htmlspecialchars( $_POST['username'] );
      $password = htmlspecialchars( $_POST['password'] );

      //database call
      $stmt = $db->prepare( "SELECT username, user_id, hashed_pass FROM users WHERE username = :uname" );
      $stmt->execute(array( ":uname"=>$username ));
    	$user = $stmt->fetchALL( PDO::FETCH_ASSOC );
    		
    	// Verify user password and set $_SESSION
    	if ( password_verify( $password, $user->hashed_pass ) && $username === $user->username) {
    		$_SESSION['user_id'] = $user->user_id;
         header("Location: home.php");
    	} else {
          echo "incorrect password";
       }
   }
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
   <form action="login.php" method="post">
      <input type="text" name="username" placeholder="Enter your username" required>
      <input type="password" name="password" placeholder="Enter your password" required>
      <input type="submit" value="Submit">
   </form>
</body>
</html>