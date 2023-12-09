<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $source = $_POST['source'];
    $feedbackType = $_POST['feedbackType'];
    $message = $_POST['message'];
    
    // Здесь вы можете сохранить данные или выполнять другую обработку.

    // Переход на следующую страницу с заполненными данными.
    header('Location: confirmation_page.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи - Подтверждение</title>
    <!-- Ваши стили CSS -->
</head>

<body>
    <h2>Подтверждение данных</h2>
    <!-- Вывод данных, например: -->
    <p>ФИО: <?php echo $fullName; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Откуда узнали о нас: <?php echo $source; ?></p>
    <p>Тип обращения: <?php echo $feedbackType; ?></p>
    <p>Текст сообщения: <?php echo $message; ?></p>

    <!-- Ссылка для повторного заполнения формы -->
    <a href="index.html">Заполнить данные еще раз</a>
</body>

</html>
