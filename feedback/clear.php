<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Clear data of course</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="gsb.png">

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
<?php
session_start();
?>
<?php
if(!isset($_SESSION['menu1'])){
					$redirect = "index.php";
					header('Location: '.$redirect);
					unset($_SESSION['menu1']);
					exit();
					}
$_SESSION['clear']='clear';
?>
<div class="res">
<form method="POST" action="cleared.php">
	<h3 class="res">Enter the information of the course whose data you want to clear</h3>
	<div class = "cl">
	<fieldset style="border-color:#F00;width: 50%;">
	<div class="back">
	<label><h4 style="margin-left:10%;">Course Title</h4><input type="text" name="course_number" maxlength="10" required/></label><br><br>
	<pre>     <input type="submit" name="submit" value="submit" maxlength="25"/></pre>
	</div>
	</fieldset>
	</div>
</form>
</div>
</section>
</body>
</html>