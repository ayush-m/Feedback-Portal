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
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!
	if(isset($_POST['pass'])){
		$password = $_POST['pass'];
		if($password=="ayushman"){
			$_SESSION['menu'] = 'menu';
			$redirect_page = "menu.php";
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
if(!isset($_SESSION['admin'])){
					$redirect = "index.php";
					header('Location: '.$redirect);
					unset($_SESSION['admin']);
					exit();
					}
					
					$_SESSION['logout'] = 'logout';
					
?>
<fieldset style="width:20%" class="std">
<form method="POST" action="" name="form1" id="form1">
	<p>
	<div class="leg"><legend align="center"><h3><b>Admin Login</b></h3></legend></div></p>
	<p>
	<?php if(isset($msg)){
	echo $msg;
	}
	?>	
	<p>
	<pre><label><b>Password:</b>   <input type="password" name="pass" required maxlength="20"/></label></pre><br>
	<img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg' class = "cap"><br>
	<h4 class = "cap">click <a href='javascript: refreshCaptcha();' style="color:#CCFF99">here</a> to refresh captcha</h4>
	<label for='message'><h4 class="cap">Enter the code above shown</h4></label>
        <input id="captcha_code" name="captcha_code" type="text">
        <br><br>
	<input type="submit" id="login" name="login" alt="login" value="">
	</p>
	</p>
</form>
</fieldset>
</body>
</html>