<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <title>Алиомаров Тимур Алитомарович, 221-362</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <div>
            <h3>Алиомаров Тимур Алиомарович</h3>
            <h3>группа 221-362</h3>
            <h3>Лабораторная работа №9.1</h3>
        </div>
    </header>

    <main>
        <form method="post" action="" class="contact-form">
            <!-- Форма для ввода параметров -->
            <input class="form-field" type="number" name="startArgument" id="startArgument" placeholder="Начальное значение аргумента" required>
            <br>
            <input class="form-field" type="number" name="numValues" id="numValues" placeholder="Количество вычисляемых значений" required>
            <br>
            <input class="form-field" type="number" name="step" id="step" placeholder="Шаг изменения аргумента" required>
            <br>
            <input class="form-field" type="number" name="min" id="min" placeholder="Минимальное значение, останавливающее вычисления" required>
            <br>
            <input class="form-field" type="number" name="max" id="max" placeholder="Максимальное значение, останавливающее вычисления" required>
            <br>
            <label for="type">Тип верстки:</label>
            <br>
            <select class="form-field" name="type" id="type">
                <option value="A">Тип A</option>
                <option value="B">Тип B</option>
                <option value="C">Тип C</option>
                <option value="D">Тип D</option>
                <option value="E">Тип E</option>
            </select>
            <br>
            <button type="submit" class="btn">Рассчитать</button>
        </form>
        <br>

        <?php
            // Функция для цикла со счетчиком и вывода результатов
            function cycleWithCounter($x, $encounting, $step, $type, $min_value, $max_value, $sum, $min, $max) {
                // Цикл со счетчиком
                for ($i = 0; $i < $encounting; $i++, $x += $step) {
                    $k = $i + 1;

                    // Вычисление значения функции в зависимости от условий
                    if ($x <= 10)
                        $f = 10 * $x - 5;
                    else if ($x > 10 and $x < 20)
                        $f = ($x + 3) * $x ** 2;
                    else {
                        if ($x == 25)
                            $f = 'error';
                        else
                            $f = 3 / ($x - 25);
                    }

                    // Обработка результатов
                    if ($f != 'error') {
                        $sum += $f;
                        $min = min($min, $f);
                        $max = max($max, $f);
                    }

                    // Вывод результата в соответствии с выбранным типом верстки
                    switch ($type) {
                        case 'A':
                            echo "f($x) = $f<br><br>";
                            break;
                        case 'B':
                            echo "<ul><li>f($x) = $f</li></ul>";
                            break;
                        case 'C':
                            echo "<ol start='$k'><li>f($x) = $f</li></ol>";
                            break;
                        case 'D':
                            echo "<table border='1' cellspacing='0' cellpadding='10'>
                                <tr>
                                    <td>Шаг</td>
                                    <td>Аргумент функции</td>
                                    <td>Значение функции</td>
                                </tr>
                                <tr>
                                    <td>$i</td>
                                    <td>$x</td>
                                    <td>$f</td>
                                </tr>
                            </table>";
                            break;
                        case 'E':
                            // Блочная верстка
                            echo '<div style="border: 2px solid red; display: inline-block; margin-right: 8px;">';
                            echo "f($x) = $f";
                            echo '</div>';
                            break;
                        default:
                            // По умолчанию использовать верстку A
                            echo "f($x) = $f<br><br>";
                    }

                    // Проверка выхода за рамки диапазона
                    if ($f >= $max_value || $f < $min_value)
                        break;
                }

                // Вывод статистики
                echo '<p>Максимальное значение: ' . ($max != PHP_INT_MIN ? round($max, 3) : 'error') . '</p>';
                echo '<p>Минимальное значение: ' . ($min != PHP_INT_MAX ? round($min, 3) : 'error') . '</p>';
                echo '<p>Среднее арифметическое: ' . ($encounting > 0 ? round($sum / $encounting, 3) : 'error') . '</p>';
                echo '<p>Сумма значений: ' . ($sum != 'error' ? round($sum, 3) : 'error') . '</p>';
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Получение параметров из формы
                $x = isset($_POST["startArgument"]) && is_numeric($_POST["startArgument"]) ? (int) $_POST["startArgument"] : 0;
                $encounting = isset($_POST["numValues"]) && is_numeric($_POST["numValues"]) ? (int) $_POST["numValues"] : 0;
                $step = isset($_POST["step"]) && is_numeric($_POST["step"]) ? (int) $_POST["step"] : 0;
                $type = isset($_POST["type"]) ? $_POST["type"] : '';

                $min_value = (int) $_POST["min"]; // Минимальное значение, останавливающее вычисления
                $max_value = (int) $_POST["max"]; // Максимальное значение, останавливающее вычисления

                $sum = 0;
                $min = PHP_INT_MAX; // Максимальное значение для поиска минимума
                $max = PHP_INT_MIN; // Минимальное значение для поиска максимума

                // Вызов функции цикла со счетчиком
                echo "Цикл со счетчиком <br>";
                echo '<br>';
                cycleWithCounter($x, $encounting, $step, $type, $min_value, $max_value, $sum, $min, $max);
            }
        ?>
    </main>

    <footer class="footer">
        <?php
            // Вывод информации о типе верстки в подвале страницы
            if (!empty($type)) {
                echo "<footer><p>Тип верстки: $type</p></footer>";
            } else {
                $type = 'Верстка еще не выбрана.';
            }
        ?>   
        
        <div class="container">&copy; 2023 Циклические алгоритмы. Условия в алгоритмах. Табулирование функций</div>
    </footer>
</body>

</html>
