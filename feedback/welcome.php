<!Doctype HTML>
<html>
<body>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['wel'])){
					print("<a href=\"index.php\">Please login first</a>");
					unset($_SESSION['wel']);
					exit();
					}
$host = "localhost";
$user = "root";
$pass = "";
$db = "feedback";
unset($_SESSION['wel']);

mysql_connect($host,$user,$pass);
mysql_select_db($db);
if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['pwd'];
		$sql = "SELECT * FROM login WHERE username='$username' AND password='$password' LIMIT 1";
		$res = mysql_query($sql);
		if(mysql_num_rows($res)==1){
			if($username>=130101001&&$username<=130101090)
								$_SESSION['select'] = 'cs';
			if($username>=130102001&&$username<=130102090)
								$_SESSION['select'] = 'ec';
			if($username>=130106001&&$username<=130106060)
								$_SESSION['select'] = 'bt';
			$_SESSION['feedback'] = 'feedback';
			$_SESSION['user'] = $_POST['username'];										//we will use in fbform1.php
			$redirect_page = "feedback.php";
			header('Location: '.$redirect_page);
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