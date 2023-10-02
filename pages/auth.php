<?php 
include_once '/var/www/html/includes/header.php';
?>

<head>
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="/css/auth.css">
    <title>Личный кабинет</title>
</head>

<body>
    
    <form action="">
        
        <div class="container text-center col-lg-4" id='main'>

        <h1 class="h1">Личный кабинет</h1>

        <div class="form-floating mb-1 ">
        <input type="email" class="form-control email" id="exampleFormControlInput1" placeholder="Введите Ваш email">
            <label for="exampleInputEmail1" class="form-label">Введите Ваш email</label>
        </div>

        <div class="form-floating ">
            <input type="password" class="form-control" id="floatingPassword1" placeholder="Введите пароль">
            <label for="floatingPassword1">Введите пароль</label>

            <div class="checkbox" id='one'>
            <input class="pass1" type="checkbox" name="showpass" id="showpass1"> Показать пароль
            </div>
        </div>

        
        <!-- Кнопка для отправки данных на проверку
             сечас закомментирована только потому что не подходит для тестов без БД.
             при создании БД работать с ней! 
            <button class="btn btn-primary" type="submit" id='submit'>Войти</button>
        -->

        <a href="?page=lk">
            <input class="btn btn-primary" type="button" value="Вход">
        </a>

        </div>

    </form>



<!-- Показ и скрытие пароля -->
<script>
    const inputPass1 = document.getElementById('floatingPassword1');
    const inputPass2 = document.getElementById('floatingPassword2');
    const iconPass1 = document.getElementById('one');
    const iconPass2 = document.getElementById('two');
    const chechbox1 = document.getElementById('showpass1');
    const chechbox2 = document.getElementById('showpass2');
    
    iconPass1.addEventListener('click', () => {
        if (inputPass1.getAttribute('type') === 'password'){
            inputPass1.setAttribute('type', 'text');
            chechbox1.setAttribute("checked","checked");

        }
        else{
            inputPass1.setAttribute('type', 'password');
            chechbox1.removeAttribute("checked");
        }
    });

    iconPass2.addEventListener('click', () => {
        if (inputPass2.getAttribute('type') === 'password'){
            inputPass2.setAttribute('type', 'text');
            chechbox2.setAttribute("checked","checked");
        }
        else{
            inputPass2.setAttribute('type', 'password');
            chechbox2.removeAttribute("checked");
        }
    });


</script>