<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
</head>
<body background="./images/backgrnd.jpg">
<?php
session_start();
?>
<?php
if(isset($_POST['login'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>The captcha code does not match!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!
	$host = "localhost";
$user = "root";
$pass = "";
$db = "feedback";

mysql_connect($host,$user,$pass);
mysql_select_db($db);
if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['pwd'];
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
	}
}
?>
<?php
if(!isset($_SESSION['facu'])){
					$redirect = "index.php";
					header('Location: '.$redirect);
					unset($_SESSION['facu']);
					exit();
					}
?>
<fieldset style="width:20%" class="std">
<form method="POST" action="" name="form1" id="form1">
	<p>
	<div class="leg"><legend align="center"><h3><b>Faculty Login</b></h3></legend></pre></p></div>
	<p>
	<?php if(isset($msg)){
	echo $msg;
	}
	?>
	<pre><label><b>Username:</b>   <input type="text" name="username" required maxlength="10"/></label></pre>
	<pre><label><b>Password:</b>   <input type="password" name="pwd" required maxlength="20"/></label></pre>
	<img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg' class = "cap"><br>
	<h4 class="cap">click <a href='javascript: refreshCaptcha();' style="color:#CCFF99">here</a> to refresh captcha</h4>
	<label for='message'><h4 class="cap">Enter the code above here</h4></label>
    <input id="captcha_code" name="captcha_code" type="text"><br><br>
	<input type="submit" id="login" name="login" alt="login" value="">
	</p>
</form>
</fieldset>
</body>
</html>
