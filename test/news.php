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

<center style="margin-top: 5px;"><h1>Актуальные новости:</h1></center>



<?php



	$file = file_get_contents("news.txt");
	$news = explode("\n", $file);

	for ($i = 0; $i < count($news); $i++) {
		$new = explode(';', $news[$i]);
		echo "<h1>".$new[0]."</h1>";
		echo "<p>".$new[1]."</p>";
		echo "<p>".$new[2]."</p>";
	}
?>



<p><a href="index.php" class="btn btn-primary" style="margin-left: 10px; margin-top: 10px;">На главную</a></p>
</body>
</html>