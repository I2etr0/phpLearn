<head>
    <title>Блог</title>
</head>

<body>

<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!-- Центрирование заголовка -->
<div class="mx-auto p2 row" style="width: 200px; margin-top: 0.5%">
    <h1>Новости</h1>
</div>


<!-- Разделяющая полоска -->
<!-- <div class="text-success" style="margin: 0 1% 0 1%">
    <hr class="border border-primary border-2 opacity-50">
</div> -->

<?php

	$file = fopen("/var/www/html/pages/news.txt", "r+");
	$news = explode("\n", $file);

	for ($i = 0; $i < count($news); $i++) {
		$new = explode(';', $news[$i]);
    $title = "<h1>".$new[0]."</h1>";
    $body = "<p>".$new[1]."</p>";
    $date = "<p>".$new[2]."</p>";
		
	}


?>

<!-- Карточки новостей -->
<div class="row" style="margin: 0.5% 0.5% 0 0.5%">
  <div class="col-sm-4 mb-3 mb-sm-3">
    <div class="card">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
        <h5 class="card-title"><?php echo $title; ?></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-primary">Читать</a>
        </div>
        <div class="card-footer">
        <small class="text-body-secondary">Last updated</small>
        </div>
    </div>
  </div>

  <div class="col-sm-4 mb-3 mb-sm-3">
    <div class="card">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-primary">Читать</a>
        </div>
        <div class="card-footer">
        <small class="text-body-secondary">Last updated</small>
        </div>
    </div>
  </div>

  <div class="col-sm-4 mb-3 mb-sm-3">
    <div class="card">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-primary">Читать</a>
        </div>
        <div class="card-footer">
        <small class="text-body-secondary">Last updated</small>
        </div>
    </div>
  </div>


  <div class="col-sm-4 mb-3 mb-sm-3">
    <div class="card">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-primary">Читать</a>
        </div>
        <div class="card-footer">
        <small class="text-body-secondary">Last updated</small>
        </div>
    </div>
  </div>
</div>



</body>