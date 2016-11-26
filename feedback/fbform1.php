<!DOCTYPE HTML>
<html lang="en">
<?php
session_start();
?>
<head>
	<meta charset="utf-8">
	<title><?php echo strtoupper($_SESSION['number']);?></title>
	<link rel="stylesheet" type="text/css" href="style_cs201.css">
</head>
<body>

<?php
if(!isset($_SESSION['fb1'])){
					echo '<a href="index.php">','<img src="./images/loginfirst.png" alt="Go Back" style="width:80px;height:80px;border:0">','</a>',"Please Login First",'<p>','</p>';
					unset($_SESSION['fb1']);
					exit();
					}
					
?>
<header>
	<div class="hea">
	<img src="./images/logo.png" alt="logo" style="width:200px;height:200px;border:0"/>
	</div>
	<hgroup>
		<h1>INDIAN INSTITUE OF TECHNOLOGY</h1>
		<h3>Guwahati - 781039, INDIA</h3>
		<h2><?php echo $_SESSION['course_name']." ".'('.strtoupper($_SESSION['number']).')';?></h2>
	</hgroup>
	<form action="logout.php" method="post">
			<input type="submit" id = "shiny" name="logout" value="Log Out"/>
	</form>
</header>
<section>
<?php
$con = mysql_connect("localhost","root","");
if(!$con){
	die("can not connect" . mysql_error());
	}
mysql_select_db("feedback");
$user = $_SESSION['user'];
$username = $user;
$coursenumber = $_SESSION['number'];
$sql1 = "SELECT * FROM $coursenumber WHERE username='".$username."' LIMIT 1";
$res = mysql_query($sql1);
if(mysql_num_rows($res)==1){
	$_SESSION['submitted'] = 'submitted';
	$redirect_page = "submitted.php";
	header('Location: '.$redirect_page);
	mysql_close($con);
	exit();
			}

$_SESSION['submit'] = 'submit';
?>
<form action ="submit.php" method = "post">
<p>
<h2>About Instructor</h2>
<table border = "1px solid black">
<tr style="background-color:#E6E68A"style="color:#FFFFFF;font-weight:bold;font-size:14px;font-family:Times New Roman, Times, serif;">
<th width=40% colspan="2">Name of the instructor: <?php echo $_SESSION['faculty1'];?></th>
<th>Unable to Judge (-)</th>
<th>Strongly Disagree (1)</th>
<th>Disagree (2)</th>
<th>Neutral (3)</th>
<th>Agree (4) </th>
<th>Strongly Agree(5)</th>
</tr>
<tr>
<td width=5%>1</td>
<td class="ques">Overall, the instruction was excellent.</td>
<td><input type="radio" name="instruction" value = "1" required/></td>
<td><input type="radio" name="instruction" value = "2" required/></td>
<td><input type="radio" name="instruction" value = "3" required/></td>
<td><input type="radio" name="instruction" value = "4" required/></td>
<td><input type="radio" name="instruction" value = "5" required/></td>
<td><input type="radio" name="instruction" value = "6" required/></td>
</tr>
<tr>
<td width=5%>2</td>
<td class="ques">The concepts were explained with clarity.</td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "1" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "2" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "3" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "4" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "5" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "6" required/></td>
</tr>
<tr>
<td width=5%>3</td>
<td class="ques">Questions and discussions were encouraged.</td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "1" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "2" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "3" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "4" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "5" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "6" required/></td>
</tr>
<tr>
<td width=5%>4</td>
<td class="ques">Allotted numbers of classes was held.</td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "1" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "2" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "3" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "4" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "5" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "6" required/></td>
</tr>
<tr>
<td width=5%>5</td>
<td class="ques">Evaluation was done regularly and feedback was given.</td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "1" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "2" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "3" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "4" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "5" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "6" required/></td>
</tr>
</table>

<h2>About Course</h2>
<table border = "1px solid black">
<tr style="background-color:#E6E68A"style="color:#FFFFFF;font-weight:bold;font-size:14px;font-family:Times New Roman", Times, serif;>
<th width=40% colspan="2"><?php echo $_SESSION['course_name']." ".'('.strtoupper($_SESSION['number']).')';?></th>
<th>Unable to Judge (-)</th>
<th>Strongly Disagree (1)</th>
<th>Disagree (2)</th>
<th>Neutral (3)</th>
<th>Agree (4) </th>
<th>Strongly Agree(5)</th>
</tr>
<tr>
<td width=5%>1</td>
<td class="ques">The course was highly enjoyable.</td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "1" required/></td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "2" required/></td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "3" required/></td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "4" required/></td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "5" required/></td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "6" required/></td>
</tr>
<tr>
<td>2</td>
<td class="ques">The content of the course was appropriate.</td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "1" required/></td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "2" required/></td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "3" required/></td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "4" required/></td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "5" required/></td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "6" required/></td>
</tr>
<td>3</td>
<td class="ques">Text/Reference materials were appropriate for the course.</td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "1" required/></td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "2" required/></td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "3" required/></td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "4" required/></td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "5" required/></td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "6" required/></td>
</tr>
</table>
<p class="text">
<h3>Strong Points For the Course</h3>
<textarea class="textbox" name="Strong_Points_For_the_Course" cols="110" rows="3" maxlength="250"></textarea>
<h3>Strong points for Instructor</h3>
<textarea class="textbox" name="Strong_points_for_Instructor" cols="110" rows="3" maxlength="250"></textarea>
<h3>Weak Points For the Course</h3>
<textarea class="textbox" name="Weak_Points_For_the_Course" cols="110" rows="3" maxlength="250"></textarea>
<h3>Weak Points For the Instructor</h3>
<textarea class="textbox" name="Weak_Points_For_Instructor" cols="110" rows="3" maxlength="250"></textarea>
<h3>Any Constructive Suggestion for improving the course and its theme</h3>
<textarea class="textbox" name="Any_Constructive_Suggestion_for_improving_the_course_and_its_thm" cols="110" rows="3" maxlength="250" id="Any_Constructive_Suggestion_for_improving_the_course_and_its_thm" wrap="hard"></textarea>
</p>

</p>
<pre>							<input type="submit" name = "submit" value = "submit"/></pre>
</form>
</section>
</body>
</html>