<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - POO</title>
    <link rel="stylesheet" href="../../_css/estilo2.css" />
</head>
<body>
    <div>
        <?php
            require_once "Mamifero.php";
            require_once "Reptil.php";
            require_once "Peixe.php";
            require_once "Ave.php";
            require_once "Canguru.php";
            require_once "Cachorro.php";
            require_once "Cobra.php";
            require_once "Tartaruga.php";
            require_once "Goldfish.php";
            require_once "Arara.php";

            $m = new Mamifero();
            $a = new Ave();
            $r = new Reptil();
            $p = new Peixe();
            $c = new Canguru();
            $k = new Cachorro();
            $t = new Tartaruga();

            print "<p>Mamífero locomovendo: {$m -> locomover()}</p>";
            print "<p>Ave locomovendo: {$a -> locomover()}</p>";
            print "<p>Reptil locomovendo: {$r -> locomover()}</p>";
            print "<p>Peixe locomovendo: {$p -> locomover()}</p>";
            print "<p>Canguru locomovendo: {$c -> locomover()}</p>";
            print "<p>Cachorro locomovendo: {$k -> locomover()}</p>";
            print "<p>Tartaruga locomovendo: {$t -> locomover()}</p>";
        ?>
    </div>
</body>
</html>