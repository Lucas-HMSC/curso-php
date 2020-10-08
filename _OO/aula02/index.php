<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
    <link rel="stylesheet" href="../../_css/estilo2.css" />
</head>
<body>
    <div>
        <?php
            require_once 'Caneta.php';

            $c1 = new Caneta;
            $c1 -> cor = "Azul";
            $c1 -> ponta = 0.5;
            $c1 -> destampar();
            print_r($c1);
            print "<br/>";
            $c2 = new Caneta;
            $c2 -> cor = "Verde";
            $c2 -> carga = 50;
            $c2 -> tampar();
            print_r($c2);
        ?>
    </div>
</body>
</html>