<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Online feedback</title>
	<link rel="stylesheet" type="text/css" href="error.css">
</head>
<body>
<?php
session_start();
?>
<?php
echo '<fieldset style="width:50%">';
if(!isset($_SESSION['submitted'])){
					print("<a href=\"index.php\">Please login first</a>");
					exit();
					}
else{
		echo "<div class='err'>";
		echo '<h2>',"You have already submitted feedback for this Course <br/>",'</h2>';
		echo '</div>';
		unset($_SESSION['submitted']);
		echo "<div1 class='err'>";
		echo '<a href="feedback.php">','<img src="./images/back1.png" alt="Go Back" style="width:80px;height:55px;border:0">','</a>';
		echo '</div1>';
		echo '</fieldset>';
		exit();
	}
?>
</body>
</html>