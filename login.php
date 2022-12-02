<?php 
    include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Михеев Даниил</title>
  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div>
            <nav class='pages'>
                <div><a href="index.php">Главная</a></div>
                <div><a href="all.php">Каталог</a></div>
            </nav>
            <nav class='button'>
                <ion-icon name="basket-outline"></ion-icon>
                <a href="login"><ion-icon name="log-in-outline"></ion-icon></a>
            </nav>
        </div>
    </header>

    <main>
        <form method="post" action="https://httpbin.org/post">
            <div class="form">
                <div class="form__item">
                    <label for="login">Логин</label>
                    <input type="text" name="login" id="login">
                </div>
                <div class="form__item">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form__item">
                    <label for="remember">Запомнить меня</label>
                    <input type="checkbox" name="remember" id="remember">
                </div>
                <div class="form__item">
                    <input type="submit" value="Войти">
                </div>
            </div>
        </form>
    </main>

    <footer>
        <!-- добавить контакты магазина: телефон, адресс, почту-->
        <p>Контакты</p>
        <p>Телефон: 8-800-555-35-35</p>
        <p>Адрес: г. Москва, ул. Ленина, д. 1</p>
        <p>Почта: shop@mail.com</p>
    </footer>
  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>