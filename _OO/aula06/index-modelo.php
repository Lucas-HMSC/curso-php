<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - POO</title>
    <link rel="stylesheet" href="../../_css/estilo2.css" />
</head>
<body>
    <div>
        <p>Projeto Controle Remoto</p>
        <pre>
        <?php
            require_once "ControleRemoto.php";
            $c = new ControleRemoto();

            $c -> ligar();
            $c -> maisVolume();
            $c -> abrirMenu();
        ?>
        </pre>
    </div>
</body>
</html>