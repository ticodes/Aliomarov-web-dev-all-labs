<?php
$title = "Алиомаров Тимур 221-362 - Лабораторная работа №1";
$footerText = "Сформировано " . date('d.m.Y в H:i:s');

$menuItems = [
    ['href' => 'index.php', 'text' => 'Главная', 'class' => ''],
    ['href' => 'page1.php', 'text' => 'Пример кода на PHP', 'class' => 'selected'],
    ['href' => 'page2.php', 'text' => 'PHP Backend', 'class' => '']
];

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
            max-width: 40%;
            margin: 0 auto;
        }
        .images {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php
                foreach ($menuItems as $item) {
                    echo '<li><a href="' . $item['href'] . '" class="' . $item['class'] . '">' . $item['text'] . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    
    <h1>Пример кода на PHP</h1>
    <p>Вот пример кода на PHP. Этот код выполняет определенную функцию.</p>

    <?php
    $s = date("s");
    $os = $s % 2;
    if ($os == 0) {
        $imageSrc1 = "пример кода2.png";
        $imageSrc2 = "пример кода3.png";
    } else {
        $imageSrc1 = "пример кода.png";
        $imageSrc2 = "пример бекенд.png";
    }
    ?>

    <div class="images">
        <img src="<?php echo $imageSrc1; ?>" alt="Пример кода 1">
        <img src="<?php echo $imageSrc2; ?>" alt="Пример кода 2">
    </div>

    <footer>
        <p><?php echo $footerText; ?></p>
        <p>ул.Автозаводская</p>
        <p>+7 (964) 052-02-19</p>
    </footer>
</body>
</html>
