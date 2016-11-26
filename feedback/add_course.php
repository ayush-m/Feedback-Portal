<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add course</title>
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
$_SESSION['add']='add';
?>

<form method="POST" action="add.php">
	<h4>Enter the information of the course to be added</h4>
	<p><b>Department</b><br><br><select name="branch">
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
	<pre><label><b>Course Title:</b>  <input type="text" name="course_number" maxlength="10" required/></label></pre><br>
	<pre><label><b>Course Name:</b>   <input type="text" name="course_name" maxlength="50" required/></label></pre><br>
	<pre><label><b>Faculty Name:</b>  <input type="text" name="faculty_name" maxlength="35" required/></label></pre></div>
	<pre>		    <input type="submit" name="submit" value="submit" maxlength="25"/></pre>
</form>
</section>
</body>
</html>