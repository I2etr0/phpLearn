<head>
    <link rel="stylesheet" href="css/register.css">
    <title>Регистрация</title>
</head>

<body>
    
    <form action="">
        
        <div class="container text-center col-lg-4" id='main'>

            <h1>Регистрация</h1>

            <!-- Email -->
            <div class="form-floating mb-1">
                <input type="email" class="form-control email" id="exampleFormControlInput1" placeholder="Введите Ваш email">
                <label for="exampleInputEmail1" class="form-label">Введите Ваш email</label>
                
            </div>

            <!-- Пароль 1 -->
            <div class="form-floating">
                
                <!-- Поле ввода -->
                <input type="password" class="form-control" id="floatingPassword1" placeholder="Введите пароль">
                <label for="floatingPassword1">Введите пароль</label>

                <!-- Переключатель видимости -->
                <div class="checkbox" id='one'>
                    <input class="form-check-input pass1" type="checkbox" name="showpass" role="switch" id="showpass1"> Показать пароль
                </div>

            </div>

            <!-- Пароль 2 -->
            <div class="form-floating">

                <!-- Поле ввода -->
                <input type="password" class="form-control" id="floatingPassword2" placeholder="Подтвердите пароль">
                <label for="floatingPassword2">Подтвердите пароль</label>

                <!-- Переключатель видимости -->
                <div class="checkbox" id='two'>
                    <input class="form-check-input pass2" type="checkbox" name="showpass" role="switch" id="showpass2"> Показать пароль
                </div>
                
            </div>

            <!-- Имя -->
            <div class="form-floating ">
                <input type="name" class="form-control name" id="floatingName" placeholder="Введите Ваше имя">
                <label for="floatingName">Введите Ваше имя</label>
            </div>

            <!-- Фамилия -->
            <div class="form-floating ">
                <input type="name" class="form-control name" id="floatingName" placeholder="Введите Вашу фамилию">
                <label for="floatingName">Введите Вашу фамилию</label>
            </div>

            <div>

            </div>
            <button class="btn btn-primary" type="submit" id='submit'>Зарегистрироваться</button>

        </div>

    </form>



<!-- Показ и скрытие пароля -->
<script>

    // input
    const inputPass1 = document.getElementById('floatingPassword1');
    const inputPass2 = document.getElementById('floatingPassword2');

    // div с чекбоксом
    const iconPass1 = document.getElementById('one');
    const iconPass2 = document.getElementById('two');

    // сам чекбокс --> для изменения состояния чекбокса
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


 <!-- Скрытие и показ кнопки
<script>

    // Кнопка авторизации
    const btn = document.getElementById('submit');

    // Скрипт показа и скрытия кнопки
    iconPass2.addEventListener('click', () => {
        if (inputPass2.getAttribute('type') === 'password'){
            $(document).ready(function() {
                $('#submit').css('visibility', 'hidden');
            });
        }
        else{
            inputPass2.setAttribute('type', 'password');
            chechbox2.removeAttribute("checked");
        }
    });

</script> -->