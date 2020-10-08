<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - POO</title>
    <link rel="stylesheet" href="../../_css/estilo2.css" />
</head>
<body>
    <div>
        <pre>
        <?php
            require_once 'Caneta.php';

            $c1 = new Caneta;
            $c1 -> modelo = "BIC Cristal";
            $c1 -> cor = "Azul";
            $c1 -> destampar();

            print_r($c1);
        ?>
        </pre>
    </div>
</body>
</html>