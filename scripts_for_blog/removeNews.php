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
<p>
	
	<a href="index.php"><button type="button" class="btn btn-primary" style="margin-left: 25px; margin-top: 25px;">На главную</button></a>

</p>

	<h1 style="margin-left: 20px;">Удаление новостей</h1>

</body>
</html>
<?php
	
	
	session_start();
	if (!isset($_SESSION['login'])) {
		header("Location: auth.php");
	}
	

	$file = file_get_contents("news.txt");
	$news = explode("\n", $file);	
	$fp = fopen("news.txt", "w");
	$text = "";
	for ($i = 0; $i < count($news); $i++) {
		$new = explode(';', $news[$i]);
		if ($new[0] != $_GET['title']) {
			$text .= $news[$i] . "\n";
			echo '<big><p style="margin-left: 40px;"><a href="removeNews.php?title='.$new[0].'">'.$new[0]."</a></p></big>";
		}
	}
	fwrite($fp, $text);
	fclose($fp);
 ?>