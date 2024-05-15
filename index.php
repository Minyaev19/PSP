<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php
            if(isset($_COOKIE['user'])== false):
        ?>
        <div class="row">
            <div class="col-md-6">
                <h1>Форма регистрации</h1>
                <form action="validation-form/check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                    <input type="text" class="form-control" name="surname" id="surname" placeholder="Введите фамилию"><br>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
                    
                    <button class="btn btn-success" type="submit"> Зарегистрировать</button>
                </form>
            </div>
            <div class="col-md-6">
                <h1>Форма авторизации</h1>
                <form action="validation-form/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
                    
                    <button class="btn btn-success" type="submit"> Авторизоваться</button>
                </form>
            </div>
            <?php else: ?>
            <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="validation-form/exit.php">сюда</a>.</p>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>