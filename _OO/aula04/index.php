<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - POO</title>
    <link rel="stylesheet" href="../../_css/estilo2.css" />
</head>
<body>
    <div>
        <pre>
        <?php
            require_once 'Caneta.php';

            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("Compact", "Preta", 1.0);
            
            print_r($c1);
            print_r($c2);
        ?>
        </pre>
    </div>
</body>
</html>