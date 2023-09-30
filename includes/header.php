<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Подключение Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

<body>

    <!-- Меню -->
    <ul class="nav justify-content-center">
        
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?">Главная</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="?page=blog">Блог</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="?page=auth">Личный кабинет</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="?page=register">Регистрация</a>
        </li>

    </ul>


<!-- Скрипт для сокращения ссылки -->
<?php
$page = $_GET['page']; 

if (isset($_GET)){
    switch ($_GET['page']) {
        default:
            include_once 'pages/main.php';
        break;
    
        case 'register':
            include_once "pages/register.php";
        break;

        case 'blog':
            include_once "pages/blog.php";
        break;

        case 'auth':
            include_once 'pages/auth.php';
        break;

        case 'lk':
            include_once 'pages/lk.php';
        break;

        
    
    }
}

?>