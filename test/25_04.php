<?php
//$fp = fopen("news.txt","a");

//$text = "hello!";

//fwrite ($fp, $text);
//fclose ($fp);

$file = file_get_contents("news.txt");

$news = explode("\n",$file);

for ($i = 0; $i < count($news); $i++){
$new = explode (";", $news[$i]);
echo "<h2>".$new[0]."</h2>";
echo "<p>".$new[1]."</p>";
echo "<p>".$new[2]."</p>";
}



?>