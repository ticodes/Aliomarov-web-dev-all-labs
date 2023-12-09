<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('q.png');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        /* Стиль для черного фона */
        .black-bg {
            background-color: black;
        }

        /* Стиль для коричневого фона */
        .brown-bg {
            background-color: brown;
        }
    </style>
    <title>Магазин спортивного питания</title>
</head>
<body>

    <!-- Шапка -->
    <header id="mainHeader">
        <div class="header-links">
            <a href="index.php">Главная</a>
            <a href="catalog.php">Каталог</a>
            <a href="login.php">Профиль</a>
        </div>
        <h1>Добро пожаловать в магазин!</h1>
    </header>

    <!-- Основная часть -->
    <main class="main">
        <section class="hero">
            <button id="changeColorButton">Изменить фон</button>
        </section>
    </main>

    <!-- Футер -->
    <footer>
        <div class="contact-info">
            <p>почта: timurtigr2005@gmail.com, +7 (964) 052-02-19</p>
        </div>
        <p>&copy; Магазин спортпита timlift, 2023</p>
    </footer>

    <!-- Скрипт на JavaScript -->
    <script>
        // Получаем кнопку и шапку по их id
        const changeColorButton = document.getElementById('changeColorButton');
        const mainHeader = document.getElementById('mainHeader');

        // Добавляем слушатель события "click" на кнопку
        changeColorButton.addEventListener('click', function() {
            // При клике чередуем между черным и коричневым фоном
            if (mainHeader.classList.contains('black-bg')) {
                mainHeader.classList.remove('black-bg');
                mainHeader.classList.add('brown-bg');
            } else {
                mainHeader.classList.remove('brown-bg');
                mainHeader.classList.add('black-bg');
            }
        });
    </script>

</body>
</html>
