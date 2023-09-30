<head>
    <link rel="stylesheet" href="/css/auth.css">
</head>

<body>
    <form action="">
        
        <div class="container text-center col-lg-4" id='main'>

        <h1>Личный кабинет</h1>

        <div class="form-floating mb-1">
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="btn btn-primary" type="submit" id='submit' >Войти</button>
        <a href="?page=auth">
            <button class="btn btn-primary" type="button" id='' >Зарегистрироваться</button>
        </a>

        </div>

    </form>
</body>