<head>
    <title>Редактор новостей</title>
</head>
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