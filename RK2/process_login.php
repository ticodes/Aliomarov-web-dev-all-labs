<!-- process_login.php -->
<?php
// Проверка наличия значений в полях формы
if (!empty($_POST['username']) && !empty($_POST['password'])) {
        header("Location: index.php");
        exit();
    }
?>
