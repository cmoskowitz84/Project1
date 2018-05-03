<?php  
# Chris Moskowitz  JFC_4174_CIT_141_55Z1_55904: CIT 141: PHP I (4174_55Z1)
session_start(); 
$error = ''; 
if (isset($_POST['login'])) { 
  $username = trim($_POST['username']); 
  $password = $_POST['pw']; 
  // users 
  $users = array( 
     'Linda' => 'password', 
     'Ralph' => 'password',
	 'Sam' => 'password',
    ); 
  $redirect = 'quiz3.php'; 
  //authenticate 
  if(array_key_exists($username, $users) && $password == $users[$username] ) { 
      $_SESSION['authenticated'] = 'Yes'; 
      $_SESSION['user'] = $username; 
      $_SESSION['start'] = time(); 
      header("Location: $redirect"); 
      exit(); 
  } 
  else { 
    $error = 'Invalid username or password.'; 
  } 
} 
?> 
<!DOCTYPE HTML> 
<html><head> 
<meta charset="utf-8"> 
<title>Login Page</title> 
</head><body> 
<h1>Login to Quiz 3 Page</h1>
<?php 
if ($error) { 
  echo "<p>$error</p>"; 
} 
?> 
<form id="form1" method="post" action=""> 
    <p> <label for="username">Username:</label><input type="text" name="username"></p> 
    <p> <label for="pw">Password:</label> <input type="text" name="pw"> </p> 
    <p> <input name="login" type="submit" value="Log in"> </p> 
</form> 
</body></html>