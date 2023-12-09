<!-- catalog.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Магазин спортивного питания - Каталог</title>

    <style>
        /* Обновленные стили для расположения картинок на всю ширину */
        .catalog {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            height: 100vh; /* Занимаем 100% высоты экрана */
            margin: 0; /* Убираем отступы у body */
            padding: 0; /* Убираем отступы у body */
        }

        .product {
            margin: 10px;
            text-align: center;
            width: 20%; /* Ширина блока с продуктом */
        }

        .product img {
            width: 100%; /* Занимаем 100% ширины родительского блока */
            height: auto; /* Автоматический расчет высоты */
        }

        /* Стили для надписей под картинками */
        .product p {
            margin-top: 10px; /* Отступ между изображением и текстом */
        }

    </style>
</head>
<body>

    <!-- Шапка -->
    <header>
        <div class="header-links">
            <a href="index.php">Главная</a>
            <a href="catalog.php">Каталог</a>
            <a href="login.php">Профиль</a>
        </div>
        <h1>Добро пожаловать в каталог!</h1>
    </header>

    <!-- Основная часть -->
    <main class="main">
        <section class="catalog">
            <!-- Пример для продукта Протеин -->
            <div class="product">
                <img src="протеин.png" alt="Протеин Optimum Nutrition 100%">
                <p>Протеин Optimum Nutrition 100%</p>
            </div>
            <!-- Пример для продукта Казеин -->
            <div class="product">
                <img src="казеин.png" alt="Казеин Maxler">
                <p>Казеин Maxler</p>
            </div>
            <!-- Пример для продукта 3 -->
            <div class="product">
                <img src="протеин2.png" alt="100% Beef Concentrate">
                <p>100% Beef Concentrate</p>
            </div>
            <!-- Продолжайте аналогично для 6 оставшихся продуктов -->
        </section>
    </main>

    <!-- Футер -->
    <footer>
        <div class="contact-info">
            <p>почта: timurtigr2005@gmail.com, +7 (964) 052-02-19</p>
        </div>
        <p>&copy; Магазин спортпита timlift, 2023</p>
    </footer>

</body>
</html>
