<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Clear data of course</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
<div class="menu">
<fieldset width="60%" style="border-color:#F00;padding:20px;">
<div class="fd">
<?php
session_start();
?>
<?php
if(!isset($_SESSION['clear'])){
					$redirect = "index.php";
					header('Location: '.$redirect);
					unset($_SESSION['clear']);
					exit();
					}

unset($_SESSION['clear']);

$conn = mysql_connect("localhost", "root", "");
mysql_select_db("feedback");
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}
$coursenum = $_POST['course_number'];
$sql = "TRUNCATE TABLE $coursenum";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo '<h4>'."Course Dosn't exist<br>".'</h4>';
  echo '<div class="back">';
  echo '<a href="menu.php">','<img src="./images/back1.png" alt="Go Back" style="width:50px;height:50px;border:0">','</a>';
  echo '</div>';;
}
else{
echo '<pre>'.'<h3>',strtoupper($coursenum)." Cleared". "<br/><br/>  Successfully".'</h3>'.'</pre>';
mysql_close($conn);
echo '</div>';
echo '<div class="back1">';
echo '<a href="menu.php">','<img src="./images/back1.png" alt="Go Back" style="width:50px;height:50px;border:0">','</a>';
echo '</div>';
}
?>
</fieldset>
</div>
</section>

</body>
</html>

