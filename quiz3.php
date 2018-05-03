<?php  
# Chris Moskowitz  JFC_4174_CIT_141_55Z1_55904: CIT 141: PHP I (4174_55Z1)
session_start();

if (!isset($_SESSION['authenticated'])) {      // no session value no page
  header('Location: login.php'); 
  exit(); 
} 
?> 
<!DOCTYPE HTML> 
<html><head> 
<meta charset=iso-"utf-8"> 
<title>Welcome</title> 
</head> 

<body> 
<h1>Welcome <?php echo $_SESSION['user']; ?> to Quiz 3!</h1> 
<p>1.) I want the following score on this quiz:</p>
<form id="logoutForm" method="post" action="examResults.php">
<p> <input type='radio' name = 'score' value = '100'> 100%
<input type='radio' name = 'score' value = '80'> 80%
<input type='radio' name = 'score' value = '60'> 60%
<input type='radio' name = 'score' value = '0'> 0%
</p>
<p><input name="submitexam" type="submit" id="submitexam" value="Submit Exam"></p> 
</form> 
</body> 
</html>