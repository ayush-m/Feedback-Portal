<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Course added</title>
</head>
<body>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['done'])){
					print("<a href=\"index.php\">Please login first</a>");
					unset($_SESSION['done']);
					exit();
					}
echo "Course ".$_SESSION['c_name']."(".$_SESSION['c_number'].")"." Added Successfully<br/>";
echo "Faculty Assigned : ".$_SESSION['f_name']."<br/>";
?>
<a href="menu.php">Go Back</a>
</body>