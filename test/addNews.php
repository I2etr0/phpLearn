
<?php
	// session_start();
	// if (!isset($_SESSION['login'])) {
	// 	header("Location: auth.php");
	// }
	
?>
<!DOCTYPE html>
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

if(!empty($_GET['title'])){
$fp = fopen('news.txt', 'a');
$text = $_GET['title'].';'.
		$_GET['content'].';'.
		date("d.m.Y", time())."\n";
		
$result = fwrite($fp, $text);
if ($result)
	echo "Новость успешно добавлена";
fclose ($fp);
}
?>

<form method="GET"> 


<!-- Поле ввода заголовка -->
<p>
		<div class="form-group; row" style="margin-left: 10px;">

		<div class="name; col-md-7">

	    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите заголовок" name="title" style="margin-top: 25px; margin-left: 325px;">    

	  	</div>

	</div>
</p>

<br>


<!-- Поле ввода текста -->
<p>
	<div class="form-group; row" style="margin-top: -25px; margin-left: 400px;">
	 
		<div class="col-md-8">

			<textarea class="form-control" id="exampleTextarea" name="content" rows="3"></textarea>

		</div>

	</div>
</p>


	<!-- Кнопка, которая создает новость -->
	<div class="row">
	 
	 <button type="submit" class="btn btn-primary" value="Создать новость" style="margin-left: 400px;">Создать новость</button>
		

	<!-- кнопка возвращающая назад -->

		<a href="index.php" class="btn btn-primary" style="margin-left: 800px;">На главную</a>

	</div>
</form>



</body>
</html>
