<?php
// Подключение к базе данных (замените значения на свои)
$servername = "http://127.0.0.1";
$username = "root";
$password = "";
$dbname = "rk2";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Обработка данных из формы регистрации (предполагается, что они приходят из POST-запроса)
$username = $_POST['username'];
$password = $_POST['password'];

// Хеширование пароля (для безопасности)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Вставка данных в таблицу
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Регистрация успешна!";
} else {
    echo "Ошибка регистрации: " . $conn->error;
}

// Закрытие соединения
$conn->close();
?>
