<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
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
<div class="menu3">
<fieldset width="60%" style="border-color:#F00">
<?php
session_start();
?>
<?php
if(!isset($_SESSION['add'])){
					$redirect = "index.php";
					header('Location: '.$redirect);
					unset($_SESSION['add']);
					exit();
					}

//unset($_SESSION['add']);
					
$accounts = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("feedback",$accounts);
$coursenum = $_POST['course_number'];
$sql = "CREATE TABLE $coursenum
("."id int NOT NULL AUTO_INCREMENT,".
"PRIMARY KEY(id),".
"username int(11),".
"instruction int(11),".
"The_concepts_were_explained_with_clarity int(11),".
"Questions_discussions_were_encouraged int(11),".
"Allotted_numbers_of_classes_was_held int(11),".
"Evaluation_was_done_regularly_and_feedback_was_given int(11),".
"The_course_was_highly_enjoyable int(11),".
"The_content_of_the_course_was_appropriate int(11),".
"Text_Reference_materials_were_appropriate_for_the_course int(11),".
"Strong_Points_For_the_Course varchar (250),".
"Strong_points_for_Instructor varchar (250),".
"Weak_Points_For_the_Course varchar (250),".
"Weak_points_for_Instructor varchar (250),".
"Any_Constructive_Suggestion_for_improving_the_course_and_its_thm varchar(250)
);";
mysql_query($sql,$accounts);
$sql = "INSERT INTO courses(number,course_name,faculty1) VALUES ('$coursenum','$_POST[course_name]','$_POST[faculty_name]')";
mysql_query($sql,$accounts);

$branch = $_POST['branch'];
$sql = "INSERT INTO $branch (number,name,faculty1) VALUES ('$coursenum','$_POST[course_name]','$_POST[faculty_name]')";
mysql_query($sql,$accounts);

echo '<pre>'.'<h3>'."   Course ".$_POST['course_name']."(".strtoupper($coursenum).")</h3>".'</pre>'.'<pre>'.'<h3>'."     Added Successfully".'</h3>'."<br/>".'</pre>';
echo '<pre>'.'<h3>'."   Faculty Assigned : ".$_POST['faculty_name']."<br/>".'</h3>'.'</pre>';
mysql_close($accounts);
?>
<div class="back3">
<a href="menu.php"><img src="./images/back1.png" alt="Go Back" style="width:50px;height:50px;border:0"></a>
</div>
</div>
</fieldset>
</section>
</body>
</html>
