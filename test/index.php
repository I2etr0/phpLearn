<?php
	// session_start();
	// if (!isset($_SESSION['login'])) {
	// 	header("Location: auth.php");
	// }

	
	// if ($_GET['exit'] == 'true') {
	// 	$_SESSION['login'] = '';
	// 	unset($_SESSION['login']);
	// 	session_destroy();
	// 	header("Location: auth.php");
	// }
?>

<DOCTYPE html>
<html>
<head>
	
	<title>Редактор новостей</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

	<meta charset="utf-8">


</head >
<body>



<div class="container; ">

	<div class="row">

		<center>

			<h1 style="color: white">Редактор новостей</h1>

			<h2 style="color: white">Выберите из списка ниже, что Вы хотите сделать:</h2>

			<p style="margin-top: 50px;"><a href="addNews.php"class="btn btn-primary">Добавить новость</a></p>

			<p><a href="removeNews.php"class="btn btn-danger">Удалить новость</a></p>

			<p><a href="news.php"class="btn btn-info">Просмотр новостей</a></p>

			<p><a href="editNews.php"class="btn btn-warning">Редактировать новости</a></p>

			<p><a class="btn btn-primary" href="index.php?exit=true" style="margin-top: 50px" >Выход</a></p>

		</center>

	</div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bubbly-bg@1.0.0/dist/bubbly-bg.js">
</script>

<script>
	bubbly({
    colorStart: "#111",
    colorStop: "#422",
    bubbleFunc: () => `hsla(0, 100%, 50%, ${Math.random() * 0.25})`
	});
</script>

</body>
</html>
