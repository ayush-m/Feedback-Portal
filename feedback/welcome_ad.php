<!Doctype HTML>
<html>
<body>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['welad'])){
					print("<a href=\"index.php\">Please login first</a>");
					unset($_SESSION['welad']);
					exit();
					}
echo $_POST['pass'];
if(isset($_POST['pass'])){
		$password = $_POST['pass'];
		if($password=="g.badsara"){
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
?>
</body>
</html>