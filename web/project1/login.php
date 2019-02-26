<?php 
session_start();
include('dbconnect.php');
$db = get_db();


if(! empty( $_POST )) {
   if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
      $stmt = $con->prepare("SELECT * FROM users WHERE username = :uname");
      $stmt->bind_param('uname', $_POST['username']);
      $stmt->execute();
      $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
    	// Verify user password and set $_SESSION
    	if ( password_verify( $_POST['password'], $user->hashed_pass ) ) {
    		$_SESSION['user_id'] = $user->user_id;
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