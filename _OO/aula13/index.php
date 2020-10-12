<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - POO</title>
    <link rel="stylesheet" href="../../_css/estilo2.css" />
</head>
<body>
    <div>
        <?php
            require_once "Mamifero.php";
            require_once "Cachorro.php";

            $k = new Cachorro();
            $k -> reagirFrase("Olá");
            $k -> reagirFrase("Vai apanhar!");
            $k -> reagirHora(11);
            $k -> reagirHora(21);
            $k -> reagirDono(true);
            $k -> reagirDono(false);
            $k -> reagirIdadePeso(2, 12.5);
            $k -> reagirIdadePeso(17, 4.5);
        ?>
    </div>
</body>
</html>