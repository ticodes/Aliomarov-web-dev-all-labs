<?php
$title = "Алиомаров Тимур 221-362 - Лабораторная работа №3";
$footerText = "Сформировано " . date('d.m.Y в H:i:s');



// Массив данных для таблицы
$data = [
    ['Тип данных', 'Описание'],
    ['Целые числа (int)', 'Представляют целые числа, например, 42 или -17.'],
    ['Дробные числа (float)', 'Представляют числа с плавающей точкой, например, 3.14.'],
    ['Строки (string)', 'Представляют текстовые данные, заключенные в кавычки, например, "Привет, мир!"'],
    ['Булевы значения (bool)', 'Представляют логические значения истинности: true (истина) или false (ложь).'],
    ['Массивы (array)', 'Представляют упорядоченные списки значений.'],
    ['Объекты (object)', 'Представляют экземпляры пользовательских классов.'],
    ['NULL', 'Представляет отсутствие значения.']
];

// Перемешайте данные в массиве
shuffle($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title><?php echo $title; ?></title>
    <style>
        img {
            display: block;
            margin-top: 20px;
            max-width: 10%;
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
            <li><a href="<?php $name='Главная';$link='index.php';$current_page=true; echo $link;
            ?>"
            <?php
            if($current_page)
            echo' class="selected"';?>><?php echo $name; 
            ?>
            </a></li>
            <li><a href="<?php $name='Пример кода на PHP';$link='page1.php';$current_page=false; echo $link;
            ?>"
            <?php
            if($current_page)
            echo' class="selected"';?>><?php echo $name; ?>
            </a></li>
            <li><a href="<?php $name='PHP Backend';$link='page2.php';$current_page=false; echo $link;
            ?>"
            <?php
            if($current_page)
            echo' class="selected"';?>><?php echo $name; ?>
            </a></li>
            </ul>
        </nav>
    </header>
    
    <h1>Добро пожаловать на главную страницу</h1>
    <p>PHP — интерпретируемый скриптовый язык программирования общего назначения. 
        Название представляет собой рекурсивный акроним PHP: Hypertext Preprocessor 
        (PHP: предварительный обработчик гипертекста), но изначально оно расшифровывалось как Personal 
        Home Page Tools (Инструменты для создания персональных веб-страниц).
    </p>

    <?php
    $s = date("s");
    $os = $s % 2;
    if ($os == 0) {
        $imageSrc = "главная страница.png";
    } else {
        $imageSrc = "главная страница.png";
    }
    ?>

    <img src="<?php echo $imageSrc; ?>" alt="Логотип php"> 

    <table>
        <caption>Типы данных в PHP</caption>
        <?php
        foreach ($data as $row) {
            echo '<tr>';
            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>

    <footer>
        <p><?php echo $footerText; ?></p>
        <p>ул.Автозаводская</p>
        <p>+7 (964) 052-02-19</p>
    </footer>
</body>
</html>
