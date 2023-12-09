<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Разные языки программирования</title>    
    <h1 style="text-align: center;">Осноные термины в языках программирования </h2>
    <style>
        .term-table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }

        .term-table th, .term-table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .term-table th {
            background-color: #f2f2f2;
        }

        .term-table tr:hover {
            background-color: #f5f5f5;
        }

        .term-image {
            display: inline-block;
            margin: 10px;
        }

        .term-image img {
            max-width: 200px;
            display: block;
        }

        .code-example {
            text-align: center;
        }
    </style>
</head>
<body>
<main>
    <?php
    $sql = "SELECT term, definition FROM terms";
    $result = $mysql->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='term-table'><tr><th>Термин</th><th>Определение</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["term"]."</td><td>".$row["definition"]."</td></tr>";
        }
        echo "</table>";
    }
    ?>

    <div class="code-example">
        <h2>Примеры кода на разных языках</h2>
    </div>

    <?php
    $sql2 = "SELECT img, name FROM images";
    $result2 = $mysql->query($sql2);

    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo '<div class="term-image">';
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['img']).'" title="'.$row['name'].'" style="width:600px;height:250px;"/>';
            echo '</div>';
        }
    }
    ?>  
</main>
</body>
</html>