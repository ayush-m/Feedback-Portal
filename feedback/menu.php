<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
a:link {
    color: #FF0000;
}
a:hover {
    color: #FF00FF;
}
</style>
</head>
<body>
<header>
	<div class="hea">
	<img src="./images/logo.png" alt="logo" style="width:200px;height:200px;border:0"/>
	</div>
	<hgroup>
		<h1>INDIAN INSTITUE OF TECHNOLOGY</h1>
		<h3>Guwahati - 781039, INDIA</h3>
	</hgroup>
	<form action="logout.php" method="post">
			<input type="submit" id = "shiny" name="logout" value="Log Out"/>
	</form>
</header>
<section>
<div class="menu1">
<?php
session_start();
?>
<?php
if(!isset($_SESSION['menu'])){
					print("<a href=\"index.php\">Please login first</a>");
					unset($_SESSION['menu']);
					exit();
					}
$_SESSION['menu1'] = 'menu1';
?>
<a href="add_course.php"><h3>Add a course</h3></a><br>
<a href="remmove_course.php"><h3>Remove a course</h3></a><br>
<a href="clear.php"><h3>Clear data of a particular course</h3></a>
</div>
</section>
</body>
</html>
