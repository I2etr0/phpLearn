<head>
    <title>Редактор новостей</title>
</head>
<?php

if(!empty($_GET['title']) && !empty($_GET['content'])){
    $fp = fopen('/var/www/html/news/news.txt', 'a+');
    $text = $_GET['title'].';'.
            $_GET['content'].';'.
            date("d.m.Y", time())."\n";
            
    $result = fwrite($fp, $text);
    if ($result){
        echo "<div class=\"alert alert-success container text-center col-md-2 p-2 \" role=\"alert\"> Новость успешно добавлена! 
            <button type=\"button\" class=\"btn-close\" disabled aria-label=\"Close\"></button>
            </div>";
    }

    else{
        echo "<div class=\"alert alert-danger container text-center col-md-2 p-2 \" role=\"alert\"> Ошибка!
            <button type=\"button\" class=\"btn-close\" disabled aria-label=\"Close\"></button>
            </div>";
    }
    fclose ($fp);
}

if (empty($_GET['title'])){

    echo "<div class=\"alert alert-danger container text-center col-md-2 p-2 \" role=\"alert\"> Введите заголовок!
            <button type=\"button\" class=\"btn-close\" aria-label=\"Close\"></button>
            </div>";
}

if (empty($_GET['content'])){

    echo "<div id=\"liveAlertPlaceholder\"></div>
        ";
}

?>

<form method="GET"> 

    <h1 class="container text-center mt-3" style="margin-bottom: 5%">Создание новости</h1>

    <!-- Поле ввода заголовка -->
    <div class="mb-5 container text-center col-md-5">
        <h5>Заголовок:</h5>
        <textarea type="text" id="floatingInput" name='title' class="form-control" placeholder="Просто начни писать" rows=1></textarea>
    </div>


    <!-- Поле ввода текста -->
    <div class="container text-center col-md-8 mb-5">
        <h5>Текст:</h5>        
        <textarea rows=5 class="form-control" name='content' placeholder="Просто начни писать" id="floatingTextarea"></textarea>
    </div>

    <div class="d-grid gap-2 col-4 mx-auto">
        <!-- <button class="btn btn-primary" id='liveAlertPlaceholder' type="submit">Записать!</button> -->
        <button class="btn btn-primary" id="liveAlertBtn" type="submit">Записать!</button>
        <button class="btn btn-primary" type="button">Назад</button>
    </div>

</form>

<script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
    const appendAlert = (message, type) => {
    const wrapper = document.createElement('div')
    wrapper.innerHTML = [
        `<div class="container text-center col-md-4 p-2 alert alert-${type} alert-dismissible" role="alert">`,
        `   <div>${message}</div>`,
        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
        '</div>'
    ].join('')

    alertPlaceholder.append(wrapper)
    }

    const alertTrigger = document.getElementById('liveAlertBtn')
    if (alertTrigger) {
    alertTrigger.addEventListener('click', () => {
        appendAlert('Nice, you triggered this alert message!', 'success')
    })
    }
</script>