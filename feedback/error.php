<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Error Occured</title>
	<link rel="stylesheet" type="text/css" href="error.css">
</head>
<body>
<section>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['error'])){
					echo '<fieldset style="width:50%">';
					echo "<div class='err'>";
					echo '</div>';
					echo "<div1 class='err'>";
					echo '<h3 style="margin-top:-5%;margin-left:40%;">'."Please Login First".'</h3>';
					echo '<div style="margin-left:43%;">'.'<a href="index.php">','<img src="./images/loginfirst.png" alt="Go Back" style="width:100px;height:100px;border:0">','</a>'.'</div>';
					echo '</div1>';
					echo '</fieldset>';
					unset($_SESSION['error']);
					exit();
					}

$_SESSION = array(); 
session_destroy();
session_unset();
echo '<fieldset style="width:50%">';
echo "<div class='err'>";
print("<h1 class='err'>Wrong credential</h1>");
echo '</div>';
echo "<div1 class='err'>";
echo '<a href="index.php">','<img src="./images/loginfirst.png" alt="Go Back" style="width:50px;height:50px;border:0">','</a>';
echo '</div1>';
echo '</fieldset>';
?>
</section>
</body>
</html>