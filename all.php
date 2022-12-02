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
                <div><a href="catalog.php">Каталог</a></div>
            </nav>
            <nav class='button'>
                <ion-icon name="basket-outline"></ion-icon>
                <a href="login.php"><ion-icon name="log-in-outline"></ion-icon></a>
            </nav>
        </div>
    </header>

    <main>
        <section class="product-list">
            <?php
                $query = "SELECT * FROM public.product";
                $result = pg_query($link, $query);
                while ($row = pg_fetch_assoc($result)) {
                    echo "<div class='product-item'>";
                    echo "<img src='static/img/$row[img]' alt=''>";
                    echo "<h3>$row[name]</h3>";
                    echo "<p>$row[description]</p>";
                    echo "<p>$row[price] руб.</p>";
                    echo "<a href='product.php?id=$row[id]'>Подробнее</a>";
                    echo "</div>";
                }
            ?>
        </section>

    </main>

    <footer>
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