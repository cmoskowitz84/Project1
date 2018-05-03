<?php  
# Chris Moskowitz  JFC_4174_CIT_141_55Z1_55904: CIT 141: PHP I (4174_55Z1)
session_start();

if (!isset($_SESSION['authenticated'])) {      // no session value no page
  header('Location: login.php'); 
  exit(); 
} 
// if logout 
if (isset($_POST['logout'])) { 
   
  $_SESSION = array();  // clear $_SESSION array 
  if (isset($_COOKIE[session_name()])) { 
    setcookie(session_name(), '', time()-86400, '/');  // delete session cookie 
  } 
  session_destroy();  // end session  
  header('Location: http://localhost/login.php'); 
  exit(); 
} 
?> 
<!DOCTYPE HTML> 
<html><head> 
<meta charset=iso-"utf-8"> 
<title>Welcome</title> 
</head> 

<body> 
<h1>Quiz 3 Results for <?php echo $_SESSION['user']; ?>:</h1> 
<p><?php echo $_SESSION['user']; ?></p>
<p>Quiz 3 result: <?php echo $_POST['score']; ?> &#37</p>
<form id="logoutForm" method="post" action=""> 
  <input name="logout" type="submit" id="logout" value="Log out"> 
</form> 
</body> 
</html>