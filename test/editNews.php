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

	<meta charset="utf-8">	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

</head>
<body>

<center style="margin-top: 10px;"><h1>Редактирование новостей</h1></center>
<center style="margin-top: 10px;"><h2>Выберите новость, которую хотите отредактировать:</h2></center>

<p><a href="news.php" style="color: white;"><button type="button" class="btn btn-primary" style="margin-left: 10px;"><center>Новости</center></button></a></p>

	

</body>
</html>



<?php

	if (!empty($_GET['old_tittle'])) {
		$file = file_get_contents("news.txt");
	$news = explode("\n", $file);	
	$fp = fopen("news.txt", "w");
	$text = "";
	for ($i = 0; $i < count($news); $i++) {
		$new = explode(';', $news[$i]);
		if ($new[0] != $_GET['old_tittle']) {
			$text .= $news[$i] . "\n";
		}
		else{
			$text .= $_GET['title'].";".$_GET['content'].";".$new[2]."\n";
		}
	}
	fwrite($fp, $text);
	fclose($fp);
	
	echo '<p><big style="margin-left: 30px; margin-top: 10px;">Новость успешно обновлена!</big></p>';
 	}




	if (empty($_GET['title'])) {

		$file = file_get_contents("news.txt");
		$news = explode("\n", $file);	
		
		for ($i = 0; $i < count($news); $i++) {
			$new = explode(';', $news[$i]);
			echo '<p><a href="editNews.php?title='.$new[0].'&content='.$new[1].'">'.$new[0]."</a></p>";
		}
		
	} 
	else {
		echo '<form action="" method="GET">
	 <input class="form-control;" style="width: 500px; margin-left: 30px; margin-bottom:20px;" name="title" id="inputPassword3" value="'.$_GET['title'].'">

	<br>

	   <textarea class="form-control; row" id="exampleTextarea" rows="20"  name="content" style=" width: 900px; margin-left: 30px; margin-bottom: 10px;" value="'.$_GET['content'].'"></textarea>

	<br>

	<input type="hidden" name="old_tittle" value="'.$_GET['title'].'" >

	<p><input type="submit" style="margin-left: 10px;" value="Сохранить" class="btn btn-primary" style:"margine-top: 30px; margine-left: 10px; margin-bottom: 10px;"></p>


</form>';
echo '<p><a href="editNews.php" class="btn btn-primary" style="margin-left: 10px; margine-top: 5px; ">К списку</a></p>';
	}
?>

	<p><a href="index.php" class="btn btn-primary" style="margin-left: 10px;">На главную</a></p>