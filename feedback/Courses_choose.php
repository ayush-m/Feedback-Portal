<!Doctype HTML>
<html>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['courses_choose'])){	// setted at feedback.php line 7
					print("<a href=\"index.php\">Please login first</a>");
					unset($_SESSION['courses_choose']);
					exit();
					}
$host = "localhost";
$user = "root";
$pass = "";
$db = "feedback";
unset($_SESSION['courses_choose']);					//unset

mysql_connect($host,$user,$pass);
mysql_select_db($db);

$chosen = $_POST['course'];							//taking course name this is coming from feedback.php

if(isset($_POST['course'])){
	$_SESSION['coursename'] = '$chosen';			//making session for course name
	/*connect to courses database*/
	$con = mysql_connect("localhost","root","");
	if(!$con){
			die("can not connect" . mysql_error());
		}
	$sql= "SELECT * FROM courses WHERE number='$chosen'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result)){
		$row=mysql_fetch_assoc($result);
		$faculty1=$row["faculty1"];
		$faculty2=$row["faculty2"];
		if($faculty2)
		{
		$_SESSION['fb2'] = 'fb2';
		$_SESSION['number'] = $row["number"];
		$_SESSION['faculty1'] = $row["faculty1"];
		$_SESSION['faculty2'] = $row["faculty2"];
		$_SESSION['course_name'] = $row["course_name"];
		$redirect_page = "fbform2.php";
		header('Location: '.$redirect_page);
		}
		else{
		$_SESSION['fb1'] = 'fb1';
		$_SESSION['number']=$row["number"];								//Course title
		$_SESSION['faculty1']=$row["faculty1"];
		$_SESSION['course_name']=$row["course_name"];					//course name like data structure
		$redirect_page = "fbform1.php";
		header('Location: '.$redirect_page);
		}
	}
}

	?>
</html>