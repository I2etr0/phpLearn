<?php 
include_once '/var/www/html/includes/header.php';
?>

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
    <h1>Статьи</h1>
</div>


<?php
  $check_file = '/var/www/html/news/news.txt';

  //проверка на возможность чтения файла
  // if (is_readable($check_file)) {
  //   echo "<div class=\"alert alert-success container text-center col-md-2 p-2 \" role=\"alert\"> Файл доступен для чтения! </div>";
  // } else {
  //     echo '<div class=\"alert alert-danger container text-center col-md-2 p-2 \" role=\"alert\"> Файл не доступен для чтения! </div>';
  // }

  $file = file_get_contents("/var/www/html/news/news.txt");
	$news = explode("\n", $file);
  echo'<div class="row" style="margin: 0 0.5% 0 0.5%">';
  for ($i = 0; $i < count($news); $i++) {
    $new = explode(';', $news[$i]);
    $words = iconv_strlen($new[1]);
    if ($words > 30){
      echo '
        <div class="col-sm-4 mb-sm-3">

          <div class="card">

            <div class="card-body">
              <h5 class="card-title">'.$new[0].'</h5>
              <p class="card-text">'.trim(substr($new[1], 0, 300))."...".'</p>
              <a href="#" class="btn btn-primary">Читать</a>
            </div>

            <div class="card-footer">
              <small class="text-body-secondary">'.$new[2].'</small>
            </div>

          </div>
        </div>
      ';
    }
    else{
      print '
        <div class="col-sm-4 mb-sm-3">

          <div class="card">

            <div class="card-body">
              <h5 class="card-title">'.$new[0].'</h5>
              <p class="card-text">'.$new[1].'</p>
              <a href="#" class="btn btn-primary">Читать</a>
            </div>

            <div class="card-footer">
              <small class="text-body-secondary">'.$new[2].'</small>
            </div>

          </div>
        </div>
      ';
    }
  }
  echo '</div>';

?>

</body>