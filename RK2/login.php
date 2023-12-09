<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #333; /* Новый цвет фона страницы */
            color: white; /* Новый цвет текста на странице */
        }

        /* Стили для заголовка формы */
        .login-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #222; /* Новый цвет фона шапки */
            color: white; /* Новый цвет текста в шапке */
            padding: 10px;
            text-align: center;
        }

        /* Центрирование формы и оформление в рамку */
        .login-form {
            background-color: #444; /* Новый цвет фона формы */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Тень рамки формы */
            width: 300px; /* Ширина формы */
            margin: 120px auto 20px; /* Отступы сверху и снизу */
        }

        /* Стили для полей ввода и кнопки */
        .login-form label {
            display: block;
            margin-bottom: 10px;
        }

        .login-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc; /* Цвет рамки полей ввода */
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-form button {
            background-color: #4caf50; /* Цвет фона кнопки */
            color: white; /* Цвет текста кнопки */
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Стили для контактной информации в футере */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #222; /* Новый цвет фона футера */
            color: white; /* Новый цвет текста в футере */
            padding: 10px;
            text-align: center;
        }

        .contact-info {
            margin-top: 20px;
        }
    </style>
    <title>Вход в профиль</title>
</head>
<body>

    <!-- Шапка -->
    <div class="login-header">
        <div class="header-links">
            <a href="index.php">Главная</a>
            <a href="catalog.php">Каталог</a>
            <a href="profile.php">Профиль</a>
        </div>
        <h1>Вход в профиль</h1>
    </div>

    <!-- Основная часть -->
    <main class="main">
        <section class="login-form">
            <form action="process_login.php" method="post"> <!-- Обработка формы будет в файле process_login.php -->
                <label for="username">Имя пользователя:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Войти</button>
            </form>
        </section>
    </main>

    <!-- Футер -->
    <div class="footer">
        <div class="contact-info">
            <p>почта: timurtigr2005@gmail.com, +7 (964) 052-02-19</p>
        </div>
        <p>&copy; Магазин спортпита timlift, 2023</p>
    </div>

</body>
</html>
