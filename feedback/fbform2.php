<!DOCTYPE HTML>
<html lang="en">
<?php
session_start();
?>
<head>
	<meta charset="utf-8">
	<title><?php echo $_SESSION['number'];?></title>
	<link rel="stylesheet" type="text/css" href="style_cs201.css">
</head>
<body>

<?php
if(!isset($_SESSION['fb2'])){

					echo '<a href="index.php">','<img src="./images/loginfirst.png" alt="Go Back" style="width:80px;height:80px;border:0">','</a>',"Please Login First",'<p>','</p>';
					unset($_SESSION['fb2']);
					exit();
					}
$_SESSION['submit2']='submit2';					
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
$coursenumber1 = $coursenumber.'a';
$sql1 = "SELECT * FROM $coursenumber1 WHERE username='".$username."' LIMIT 1";
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
<form action ="submit2.php" method = "post">
<p>
<table border = "1px solid black">
<tr style="background-color:#E6E68A"style="color:#FFFFFF;font-weight:bold;font-size:14px;font-family:Times New Roman">
<th width=40% colspan="2">Name of the instructor: <?php echo $_SESSION['faculty1'];?></th>
<th>Unable to Judge (-)</th>
<th>Strongly Disagree (1)</th>
<th>Disagree (2)</th>
<th>Neutral (3)</th>
<th>Agree (4) </th>
<th>Strongly Agree(5)</th>
</tr>
<p>
<tr>
<td width=5%>1</td>
<td>Overall, the instruction was excellent.</td>
<td><input type="radio" name="instruction" value = "1" required/></td>
<td><input type="radio" name="instruction" value = "2" required/></td>
<td><input type="radio" name="instruction" value = "3" required/></td>
<td><input type="radio" name="instruction" value = "4" required/></td>
<td><input type="radio" name="instruction" value = "5" required/></td>
<td><input type="radio" name="instruction" value = "6" required/></td>
</tr>
</p>
<tr>
<td>2</td>
<td>The concepts were explained with clarity.</td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "1" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "2" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "3" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "4" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "5" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity" value = "6" required/></td>
</tr>
<tr>
<td>3</td>
<td>Questions and discussions were encouraged.</td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "1" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "2" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "3" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "4" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "5" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged" value = "6" required/></td>
</tr>
<tr>
<td>4</td>
<td>Allotted numbers of classes was held.</td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "1" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "2" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "3" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "4" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "5" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held" value = "6" required/></td>
</tr>
<tr>
<td>5</td>
<td>Evaluation was done regularly and feedback was given.</td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "1" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "2" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "3" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "4" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "5" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given" value = "6" required/></td>
</tr>
</table>
</p>


<table border = "1px solid black">
<tr style="background-color:#E6E68A"style="color:#FFFFFF;font-weight:bold;font-size:14px;font-family:Times New Roman">
<th width=40% colspan="2">Name of the instructor: <?php echo $_SESSION['faculty2'];?></th>
<th>Unable to Judge (-)</th>
<th>Strongly Disagree (1)</th>
<th>Disagree (2)</th>
<th>Neutral (3)</th>
<th>Agree (4) </th>
<th>Strongly Agree(5)</th>
</tr>
<p>
<tr>
<td width=5%>1</td>
<td>Overall, the instruction was excellent.</td>
<td><input type="radio" name="instruction1" value = "1" required/></td>
<td><input type="radio" name="instruction1" value = "2" required/></td>
<td><input type="radio" name="instruction1" value = "3" required/></td>
<td><input type="radio" name="instruction1" value = "4" required/></td>
<td><input type="radio" name="instruction1" value = "5" required/></td>
<td><input type="radio" name="instruction1" value = "6" required/></td>
</tr>
</p>
<tr>
<td>2</td>
<td>The concepts were explained with clarity.</td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity1" value = "1" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity1" value = "2" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity1" value = "3" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity1" value = "4" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity1" value = "5" required/></td>
<td><input type="radio" name="The_concepts_were_explained_with_clarity1" value = "6" required/></td>
</tr>
<tr>
<td>3</td>
<td>Questions and discussions were encouraged.</td>
<td><input type="radio" name="Questions_discussions_were_encouraged1" value = "1" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged1" value = "2" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged1" value = "3" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged1" value = "4" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged1" value = "5" required/></td>
<td><input type="radio" name="Questions_discussions_were_encouraged1" value = "6" required/></td>
</tr>
<tr>
<td>4</td>
<td>Allotted numbers of classes was held.</td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held1" value = "1" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held1" value = "2" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held1" value = "3" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held1" value = "4" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held1" value = "5" required/></td>
<td><input type="radio" name="Allotted_numbers_of_classes_was_held1" value = "6" required/></td>
</tr>
<tr>
<td>5</td>
<td>Evaluation was done regularly and feedback was given.</td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given1" value = "1" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given1" value = "2" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given1" value = "3" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given1" value = "4" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given1" value = "5" required/></td>
<td><input type="radio" name="Evaluation_was_done_regularly_and_feedback_was_given1" value = "6" required/></td>
</tr>
</table>

<h2>About Course</h2>
<table border = "1px solid black">
<tr style="background-color:#E6E68A"style="color:#FFFFFF;font-weight:bold;font-size:14px;font-family:Times New Roman">
<th width=40% colspan="2"><?php echo $_SESSION['course_name'].'('.strtoupper($_SESSION['number']).')';?></th>
<th>Unable to Judge (-)</th>
<th>Strongly Disagree (1)</th>
<th>Disagree (2)</th>
<th>Neutral (3)</th>
<th>Agree (4) </th>
<th>Strongly Agree(5)</th>
</tr>
<tr>
<td width=5%>1</td>
<td>The course was highly enjoyable.</td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "1" required/></td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "2" required/></td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "3" required/></td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "4" required/></td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "5" required/></td>
<td><input type="radio" name="The_course_was_highly_enjoyable" value = "6" required/></td>
</tr>
<tr>
<td>2</td>
<td>The content of the course was appropriate.</td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "1" required/></td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "2" required/></td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "3" required/></td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "4" required/></td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "5" required/></td>
<td><input type="radio" name="The_content_of_the_course_was_appropriate" value = "6" required/></td>
</tr>
<td>3</td>
<td>Text/Reference materials were appropriate for the course.</td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "1" required/></td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "2" required/></td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "3" required/></td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "4" required/></td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "5" required/></td>
<td><input type="radio" name="Text_Reference_materials_were_appropriate_for_the_course" value = "6" required/></td>
</tr>
</table>


<h2>Strong Points For the Course</h2>
<textarea class="textbox" name="Strong_Points_For_the_Course" cols="110" rows="3" maxlength="250"></textarea>

<h2>Strong points for Instructor: <?php echo $_SESSION['faculty1'];?></h2>
<textarea class="textbox" name="Strong_points_for_Instructor" cols="110" rows="3" maxlength="250"></textarea>

<h2>Strong points for Instructor: <?php echo $_SESSION['faculty2'];?></h2>
<textarea class="textbox" name="Strong_points_for_Instructor1" cols="110" rows="3" maxlength="250"></textarea>

<h2>Weak Points For the Course</h2>
<textarea class="textbox" name="Weak_Points_For_the_Course" cols="110" rows="3" maxlength="250"></textarea>

<h2>Weak Points For the Instructor: <?php echo $_SESSION['faculty1'];?></h2>
<textarea class="textbox" name="Weak_Points_For_Instructor" cols="110" rows="3" maxlength="250"></textarea>

<h2>Weak Points For the Instructor: <?php echo $_SESSION['faculty2'];?></h2>
<textarea class="textbox" name="Weak_Points_For_Instructor1" cols="110" rows="3" maxlength="250"></textarea>

<h2>Any Constructive Suggestion for improving the course and its theme</h2>
<textarea class="textbox" name="Any_Constructive_Suggestion_for_improving_the_course_and_its_thm" cols="110" rows="3" maxlength="250" id="Any_Constructive_Suggestion_for_improving_the_course_and_its_thm" wrap="hard"></textarea>



<pre>							<input type="submit" name = "submit" value = "submit"/></pre>
</form>
</section>
</body>
</html>