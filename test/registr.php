<DOCTYPE html>
<html>
<head>
	<title>Редактор новостей</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

	<meta charset="utf-8">


</head>
<body>


<?php

if (!empty($_POST['passl']) && !empty($_POST['pass2']) && !empty($_POST['login']) && !empty($_POST['name'])) {
	
	if ($_POST['pass1'] == $_POST['pass2']) {
	
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
	
	$text = "INSERT INTO users (logib , password, name)
			 VALUES ('".$_POST['login']."',
					 '".$_POST['pass']."',
					 '".$_POST['name']."')";
					 
	$qwery = mysqli_query($link, $text);
	if ($qwery){
		echo "Успешня регистрация";
		header("refresh: 5; url=auth.php");
	}	else {	
			echo "Ошибка при регистрации";
	}
	} else {
		echo "Пароли не совпадают";
	}

					
	
}

?>

</body>
</html>

<div style="width: 300px;
    		height: 300px;
    		position: absolute;
    		top: 35%;
			left: 45%;
			margin: -125px 0 0 -125px;">	

    <form action="" method="POST">

        <h3>Логин</h3>
        <input type="text" class="form-control" style="width: 400px;" id="exampleInputPassword1" placeholder="login"><br>

            <h3>Введите пароль</h3>
            <input type="password" class="form-control" style="width: 400px;" id="exampleInputPassword1" placeholder="password"><br>

    	        <h3>Подтвердите пароль</h3>
        	    <input type="password" class="form-control" style="width: 400px;" id="exampleInputPassword1" placeholder="password"><br>

            		<h3>Придумайте логин</h3>
            		<input type="text" class="form-control" style="width: 400px;" id="exampleInputPassword1" placeholder="login"><br>
            
	        			<input class="btn btn-primary" type="submit" value="Регистрация">
    </form>

</div>



