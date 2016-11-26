<!Doctype HTML>
<html>
<body>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['welf'])){
					print("<a href=\"index.php\">Please login first</a>");
					unset($_SESSION['welf']);
					exit();
					}
$host = "localhost";
$user = "root";
$pass = "";
$db = "feedback";
unset($_SESSION['welf']);

mysql_connect($host,$user,$pass);
mysql_select_db($db);
if(isset($_POST['username1'])){
		$username = $_POST['username1'];
		$password = $_POST['pwd1'];
		$sql = "SELECT * FROM loginf WHERE username='$username' AND password='$password' LIMIT 1";
		$res = mysql_query($sql);
		if(mysql_num_rows($res)==1){
			$_SESSION['result'] = 'result';
			$sql= "SELECT * FROM loginf WHERE username='$username'";
			$result = mysql_query($sql);
			if(mysql_num_rows($result)){
							$row=mysql_fetch_assoc($result);
							$_SESSION['teacher'] = $row['name'];
							$_SESSION['c_title'] = $row['number'];
							$_SESSION['course_name1'] = $row['course_name'];
							$redirect_page = "result.php";
							header('Location: '.$redirect_page);
								}
			}
		else{
			$_SESSION['error'] = 'error';
			$redirect_page = "error.php";
			header('Location: '.$redirect_page);
			}
	}
?>
</body>
</html>