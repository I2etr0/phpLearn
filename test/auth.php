<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

	<title>Вход на сайт</title>
</head>
<body style="color: darkturquoise;" >


<?php
	
	$ms_login = 'cs114';
	$ms_password = '114';
	$ms_db = 'cs114';
	$ms_host = 'localhost';
	
	$link = mysqli_connect(
	$ms_host, $ms_login, $ms_password, $ms_db);
	
	if (!$link)
	{
		exit( "Oшибка соединения с БД" );
	}
	
	mysqli_query($link, "SET NAMES utf8" );
	
	if (!empty ($_POST['login']) && !empty($_POST['pass'])) 
	{
		$query = mysqli_query ($link, "'SELECT * FROM users WHERE 
		login = '".$_POST['login']."' AND 
	    password='".$_POST['pass']."'");
		if (mysqli_num_rows ($query) > 0) 
		{
			$_SESSION['login'] = $_POST['login'];
			header("Location: index.php");
		} else {
			echo "<b>Неверный логин\пароль</b>";
		}
	}
?>


<div style="width: 250px;
    		height: 250px;
    		position: absolute;
    		top: 45%;
			left: 45%;
			margin: -125px 0 0 -125px;">	

			<h1 style="margin-left: 35%; color: black; margin-bottom: 10px;">Авторизация</h1>

	<form action="" method="POST" autocomplete="off">

		<input type="text" name="login" class="form-control" placeholder="login" style="width: 400px;"><br>
		<input type="password" class="form-control" style="width: 400px;" name="pass" placeholder="password"><br>
		<input class="btn btn-primary row" style="margin-left: 5px;" type="submit" value="Войти">
		<a href="registr.php" class="btn btn-primary" style="margin-left: 40px;" type="submit" value="Войти">Регистрация</a>

	</form>

</div>



</body>
</html>