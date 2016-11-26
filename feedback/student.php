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
		$sql = "SELECT * FROM login WHERE username='$username' AND password='$password' LIMIT 1";
		$res = mysql_query($sql);
		if(mysql_num_rows($res)==1){
			if($username>=130101001&&$username<=130101090)
								$_SESSION['select'] = 'cse';
			if($username>=130102001&&$username<=130102090)
								$_SESSION['select'] = 'ece';
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
	}
}
?>
<?php
if(!isset($_SESSION['stdt'])){
					$redirect = "index.php";
					header('Location: '.$redirect);
					unset($_SESSION['stdt']);
					exit();
					}
?>
<fieldset style="width:20%" class="std">
<form method="POST" action="" name="form1" id="form1">
	<p>
	<div class="leg"><legend align="center"><h3><b>Student Login</b></h3></legend></pre></p></div>
	<p>
	<?php if(isset($msg)){
	echo $msg;
	}
	?>
	<pre><label><b>Username:</b>   <input type="text" name="username" required maxlength="10"/></label></pre>
	<pre><label><b>Password:</b>   <input type="password" name="pwd" required maxlength="20"/></label></pre><br>
	<img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg' class = "cap"><br>
	<h4 class="cap">click <a href='javascript: refreshCaptcha();' style="color:#CCFF99">here</a> to refresh captcha</h4>
	<label for='message'><h4 class="cap">Enter the code shown above</h4></label>
    <input id="captcha_code" name="captcha_code" type="text"/><br><br>
	<input type="submit" id="login" name="login" alt="login" value="">
	</p>
</form>
</fieldset>
</body>
</html>
