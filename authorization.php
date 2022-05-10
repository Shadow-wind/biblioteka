<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorization</title>
    <link rel="stylesheet" href="style/autorization.css">
</head>
<body>
    <div class="container">
        <div class="autorization_forms wrapper">
            <form name="authorization" method="post" action="#" >
                <div class="text_field login form_grid ">
                    <label class="text-field__label" for="email">E-mail:</label>
                    <input class="text-field__input" type="email" name="email" value="" placeholder="Логин" required > 
                </div>
                <div class="text_field password form_grid">
                    <label class="text-field__label" for="pwd">Пароль:</label>
                    <input class="text-field__input" type="password" name="pwd" placeholder="Пароль" pattern=".{12,}" title="Минимальная длина пароля 12 символов" required >
                </div>
                <input class="text-field__btn" type="button" placeholder="Войти" value="Войти">
                <div class="var_avtor">
                    <input  class="text-field__btn" type="button" value="Зарегистрироваться">

                </div>

            </form>
            
        </div>
    </div>
</body>
</html>