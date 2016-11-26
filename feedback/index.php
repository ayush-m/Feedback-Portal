<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
</head>
<body background="./images/backgrnd.jpg">
<?php
session_start();
?>
<?php
$_SESSION['facu'] = 'facu';
$_SESSION['stdt'] = 'stdt';
$_SESSION['admin'] = 'admin';
?>
<a href="student.php" title="Login"><img class="login" src="./images/studentlogin.png" /></a>
<a href="faculty.php" title="Login"><img class="loginf" src="./images/faculy.png" /></a>
<a href="admin.php" title="Login" class = "admin">Admin Login</a>
<footer>
  <p>For Further Details Contact : Ayush Mananiya <a href="mailto:ayushkum36@gmail.com" style="color:red">( ayushkum36@gmail.com)</a></p>
</footer>
</body>
</html>
