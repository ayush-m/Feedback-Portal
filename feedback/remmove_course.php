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
$_SESSION['remove']='remove';
?>
<form method="POST" action="remove.php">
	<h4 style = "margin-left:33%">Enter the information of the course to be deleted</h4>
	<div class = "rm">
	<p><b style = "margin-left:15%">Department</b><br><br><select name="branch">
		<option value="cse">Computer Science And Engineering</option>
		<option value="ece">Electronics And Communication Engineering</option>
		<option value="eee">Electrical and Electronics Engineering</option>
		<option value="m&c">Mathematics and Computing</option>
		<option value="ep">Engineering Physics</option>
		<option value="cl">Chemical Engineering</option>
		<option value="ce">Civil Engineering</option>
		<option value="bt">Biotechnology</option>
		<option value="cst">Chemical Science & Tech.</option>
		<option value="me">Mechanical Engineering</option>
	</select><br><br>
	<label><b style = "margin-left:15%">Course Title<br><br></b><input type="text" name="course_number" maxlength="10" style = "margin-left:10%" required/></label><br><br>
	<pre>	      <input type="submit" name="submit" value="submit" maxlength="25"/></pre>
	</div>
</form>
</section>
</body>
</html>