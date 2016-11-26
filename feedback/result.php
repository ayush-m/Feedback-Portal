<!Doctype HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Course Feedback</title>
	<link rel="stylesheet" type="text/css" href="style_cs201.css">
</head>
<body background = "white">
<header>
	<div class="hea">
	<img src="./images/logo.png" alt="logo" style="width:200px;height:200px;border:0"/>
	</div>
	<hgroup>
		<h1>INDIAN INSTITUE OF TECHNOLOGY</h1>
		<h3>Guwahati - 781039, INDIA</h3>
		<h2>Online feedback form</h2>
	</hgroup>
	<form action="logout.php" method="post">
			<input type="submit" id = "shiny" name="logout" value="Log Out"/>
	</form>
</header>
<?php
session_start();
?>
<?php
$_SESSION['logout'] = 'logout';
if(!isset($_SESSION['result'])){
					print("<a href=\"index.php\">Please login first</a>");
					unset($_SESSION['result']);
					exit();
					}
$host = "localhost";
$user = "root";
$pass = "";
$db = "feedback";

mysql_connect($host,$user,$pass);
mysql_select_db($db);

		$name = $_SESSION['teacher'];
		$tb = $_SESSION['c_title'];
		$test = array("instruction","The_concepts_were_explained_with_clarity","Questions_discussions_were_encouraged","Allotted_numbers_of_classes_was_held","Evaluation_was_done_regularly_and_feedback_was_given","The_course_was_highly_enjoyable","The_content_of_the_course_was_appropriate","Text_Reference_materials_were_appropriate_for_the_course");
		for($i=0;$i<8;$i++){
					for($j=0;$j<6;$j++){
							$x = $j+1;
							$sql = "SELECT * FROM $tb WHERE $test[$i] = '$x'";
							$res = mysql_query($sql);
							$cnt = mysql_num_rows($res);
							$count[$i][$j] =  $cnt;
							}
						}
		$test = array("instruction","The concepts were explained with_clarity","Questions discussions were encouraged","Allotted numbers of classes was held","Evaluation was done regularly and feedback was given","The course was highly enjoyable","The content of the course was appropriate","Text/Reference materials were appropriate for the course");
		echo '<section>';
		echo '<h2>About Instructor</h2>';
		echo '<table border = "1px solid black">';
		echo '<tr style="background-color:#E6E68A"style="color:#FFFFFF;font-weight:bold;font-size:14px;font-family:Times New Roman", Times, serif;>';
		echo '<th width=40% colspan="2">Name of the instructor: ', "$name",'</th>';
		echo '<th>Unable to Judge (-)</th>';
		echo '<th>Strongly Disagree (1)</th>';
		echo '<th>Disagree (2)</th>';
		echo '<th>Neutral (3)</th>';
		echo '<th>Agree (4) </th>';
		echo '<th>Strongly Agree(5)</th>';
		echo '</tr>';
		for($i=0;$i<5;$i++){
				echo '<tr>';
				echo '<td width=5%>',$i+1,'</td>';
				echo '<td class="ques">',$test[$i],'.','</td>';
				for($j=0;$j<6;$j++)
						echo '<td>',$count[0][$j],'</td>';
				echo '</tr>';
				}
		echo '</table>';
		echo '<h2>About Course</h2>';
		echo '<table border = "1px solid black">';
		echo '<tr style="background-color:#E6E68A"style="color:#FFFFFF;font-weight:bold;font-size:14px;font-family:Times New Roman", Times, serif;>';
		echo '<th width=40% colspan="2">',$_SESSION['course_name1'],' (',strtoupper($tb),')','</th>';
		echo '<th>Unable to Judge (-)</th>';
		echo '<th>Strongly Disagree (1)</th>';
		echo '<th>Disagree (2)</th>';
		echo '<th>Neutral (3)</th>';
		echo '<th>Agree (4) </th>';
		echo '<th>Strongly Agree(5)</th>';
		echo '</tr>';
		for($i=5;$i<8;$i++){
				echo '<tr>';
				echo '<td width=5%>',$i-4,'</td>';
				echo '<td class="ques">',$test[$i],'.','</td>';
				for($j=0;$j<6;$j++)
						echo '<td>',$count[$i][$j],'</td>';
				echo '</tr>';
				}
		echo '</table>';
		echo '<pre>','<h4>','  Note: Above table entry denote the number of students','</h4>','</pre>';
		$sql1 = "SELECT count(1) FROM $tb";
		$res = mysql_fetch_array(mysql_query($sql1));
		$total = $res[0];
		echo '<b>',"    Total Feedback Submitted :  ",'</b>',$total;
		echo '</section>';
?>
</body>
</html>