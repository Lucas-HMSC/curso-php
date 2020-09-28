<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $preco = $_GET["p"];
            echo "O preço é R$ ".number_format($preco, 2, ",", ".");
            $preco += $preco * 0.1;
            echo "<br/>E o novo preço, com 10% de aumento será R$ ".number_format($preco, 2, ",", ".");
        ?>
    </div>
</body>
</html>