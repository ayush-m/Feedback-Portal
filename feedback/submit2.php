<!Doctype HTML>
<html>
<body>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['submit2'])){
					print("<a href=\"index.php\">Please login first</a>");
					unset($_SESSION['submit2']);
					exit();
					}
$host = "localhost";
$user = "root";
$pass = "";
$db = "feedback"; 

unset($_SESSION['submit2']);

if(isset($_POST['submit'])){
$con = mysql_connect($host,$user,$pass);
if(!$con){
	die("can not connect" . mysql_error());
	}
mysql_select_db($db);
$user = $_SESSION['user'];
$coursenumber = $_SESSION['number'];
$coursenumber1 = $coursenumber.'a';
$sql = "INSERT INTO $coursenumber1 (username,instruction,The_concepts_were_explained_with_clarity,Questions_discussions_were_encouraged,Allotted_numbers_of_classes_was_held,Evaluation_was_done_regularly_and_feedback_was_given,The_course_was_highly_enjoyable,The_content_of_the_course_was_appropriate,Text_Reference_materials_were_appropriate_for_the_course,Strong_Points_For_the_Course,Strong_points_for_Instructor,Weak_Points_For_the_Course,Weak_points_for_Instructor,Any_Constructive_Suggestion_for_improving_the_course_and_its_thm) VALUES ('$user','$_POST[instruction]','$_POST[The_concepts_were_explained_with_clarity]','$_POST[Questions_discussions_were_encouraged]','$_POST[Allotted_numbers_of_classes_was_held]','$_POST[Evaluation_was_done_regularly_and_feedback_was_given]','$_POST[The_course_was_highly_enjoyable]','$_POST[The_content_of_the_course_was_appropriate]','$_POST[Text_Reference_materials_were_appropriate_for_the_course]','$_POST[Strong_Points_For_the_Course]','$_POST[Strong_points_for_Instructor]','$_POST[Weak_Points_For_the_Course]','$_POST[Weak_Points_For_Instructor]','$_POST[Any_Constructive_Suggestion_for_improving_the_course_and_its_thm]')";
mysql_query($sql,$con);

$coursenumber2 = $coursenumber.'b';
$sql = "INSERT INTO $coursenumber2 (username,instruction,The_concepts_were_explained_with_clarity,Questions_discussions_were_encouraged,Allotted_numbers_of_classes_was_held,Evaluation_was_done_regularly_and_feedback_was_given,The_course_was_highly_enjoyable,The_content_of_the_course_was_appropriate,Text_Reference_materials_were_appropriate_for_the_course,Strong_Points_For_the_Course,Strong_points_for_Instructor,Weak_Points_For_the_Course,Weak_points_for_Instructor,Any_Constructive_Suggestion_for_improving_the_course_and_its_thm) VALUES ('$user','$_POST[instruction1]','$_POST[The_concepts_were_explained_with_clarity1]','$_POST[Questions_discussions_were_encouraged1]','$_POST[Allotted_numbers_of_classes_was_held1]','$_POST[Evaluation_was_done_regularly_and_feedback_was_given1]','$_POST[The_course_was_highly_enjoyable]','$_POST[The_content_of_the_course_was_appropriate]','$_POST[Text_Reference_materials_were_appropriate_for_the_course]','$_POST[Strong_Points_For_the_Course]','$_POST[Strong_points_for_Instructor1]','$_POST[Weak_Points_For_the_Course]','$_POST[Weak_Points_For_Instructor1]','$_POST[Any_Constructive_Suggestion_for_improving_the_course_and_its_thm]')";
mysql_query($sql,$con);
unset($_SESSION['fb1']);
unset($_SESSION['fb2']);
$redirect_page = "feedback.php";
header('Location: '.$redirect_page);
mysql_close($con);
}
?>
</body>
</html>