<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Remove course</title>
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
<fieldset width="60%" style="border-color:#F00">
<?php
session_start();
?>
<?php
if(!isset($_SESSION['remove'])){
					$redirect = "index.php";
					header('Location: '.$redirect);
					unset($_SESSION['remove']);
					exit();
					}

//unset($_SESSION['remove']);

$conn = mysql_connect("localhost", "root", "");
mysql_select_db("feedback");
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}
$coursenum = $_POST['course_number'];
$sql = "DROP TABLE $coursenum";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  echo '<h3>'.'<pre>'."      Course Dosn't Exist".'</pre>'.'</h3>';
  echo '<div class="back2">';
  echo '<a href="menu.php">','<img src="./images/back1.png" alt="Go Back" style="width:50px;height:50px;border:0">','</a>';
  echo '</div>';
  echo die();
}
$sql = "DELETE FROM courses WHERE number='$coursenum'" ;
$retval = mysql_query( $sql, $conn );

$branch = $_POST['branch'];
$sql = "DELETE FROM $branch WHERE number='$coursenum'";
$retval = mysql_query($sql,$conn);
if(! $retval )
{
  echo "cannot Delete Data<br/>";
  echo '<a href="menu.php">',"Go Back",'</a>';
}
else
{
echo '<pre>'."             ".strtoupper($coursenum).'<h3>'."<br/>"."     Deleted Successfully".'</h3>'.'</pre>'."<br/>";
mysql_close($conn);
echo '<div class="back4">';
echo '<a href="menu.php">','<img src="./images/back1.png" alt="Go Back" style="width:50px;height:50px;border:0">','</a>';
echo '</div>';
}
?>
</fieldset>
</div>
</section>
</body>
</html>

