<head>
    <link rel="stylesheet" href="css/auth.css">
</head>

<body>
    
    <form action="">
        
        <div class="container text-center col-lg-4" id='main'>

        <h1>Авторизация</h1>

        <div class="form-floating mb-1">
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Введите Ваш email">
            <label for="exampleInputEmail1" class="form-label">Введите Ваш email</label>
            
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword1" placeholder="Введите пароль" value='123'>
            <label for="floatingPassword1">Введите пароль</label>

            <div class="checkbox">
            <input type="checkbox" name="showpass" id="showpass1"> Показать пароль
            </div>
        </div>


        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword2" placeholder="Подтвердите пароль">
            <label for="floatingPassword2">Подтвердите пароль</label>

            <div class="checkbox">
            <input type="checkbox" name="showpass" id="showpass2"> Показать пароль
            </div>
        </div>

        <div class="form-floating">
            <input type="name" class="form-control" id="floatingName" placeholder="Введите Ваше Имя">
            <label for="floatingName">Введите Ваше Имя</label>
        </div>

        <button class="btn btn-primary" type="submit" id='submit'>Зарегистрироваться</button>

        </div>

    </form>
<script>
    const inputPass1 = document.getElementByID('floatingPassword1');
    const inputPass2 = document.getElementByID('floatingPassword2');
    const iconPass1 = document.getElementByID('showpass1');
    const iconPass2 = document.getElementByID('showpass2');

    iconPass1.addEventListener('click', () => {
        if (inputPass1.getAttribute('type') === 'password'){
            inputPass1.setAttribute('type', 'text');
        }
        else{
            inputPass1.setAttribute('type', 'password');
        }
    });


</script>