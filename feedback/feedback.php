<!DOCTYPE HTML>
<html lang="en">
<?php
session_start();
?>
<?php
$_SESSION['courses_choose'] = 'courses_choose';
if(!isset($_SESSION['feedback'])){
					echo '<a href="index.php">','<img src="./images/loginfirst.png" alt="Go Back" style="width:50px;height:50px;border:0">','</a>',"Please Login First",'<p>','</p>';
					unset($_SESSION['feedback']);
					exit();
					}
$_SESSION['logout'] = 'logout';
?>
<head>
	<meta charset="utf-8">
	<title>Course Feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<div class="hea">
	<img src="./images/logo.png" alt="logo" style="width:140px;height:140px;border:0"/>
	</div>
	<hgroup>
		<h1>INDIAN INSTITUE OF TECHNOLOGY</h1>
		<h3>Guwahati - 781039, INDIA</h3>
		<h2>Online feedback form</h2>
	</hgroup>
	<form action="logout.php" method="post">
			<input type="submit" id = "shiny1" name="logout" value="Log Out"/>
	</form>
</header>
<section>
<div class="image">
<img src="./images/tree.jpg" alt="tree" width="600px" class="im">
 <h3 class="bran"><?php echo strtoupper($_SESSION['select']);?></h3>
</div>
<?php

$conn = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("feedback",$conn);
$branch = $_SESSION['select'];
$sql1 = "SELECT count(1) FROM $branch";
$res = mysql_fetch_array(mysql_query($sql1));
$total = $res[0];


$result = mysql_query("SELECT number FROM $branch");
$storeArray = Array();
$i=0;
echo "<div class='cs'>";
echo '<form action="Courses_choose.php" method="post">';
echo '<p>';
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $storeArray[] =  $row['number']; 
	$print=strtoupper($storeArray[$i]);
	  echo "<input type = 'submit' id='round' name = 'course' value ='$print'/>";
		$i++;
		}
echo '</div>';
echo '</p>';
echo '</form>';




?>

</section>
</body>