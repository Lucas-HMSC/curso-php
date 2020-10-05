<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $nome = "Carvalho";
            $novo = str_pad($nome, 20, "*", STR_PAD_RIGHT);
            print "Meu sobrenome é $novo<br/>";
            $novo2 = str_pad($nome, 20, "*", STR_PAD_BOTH);
            print "Meu sobrenome é $novo2<br/>";
            $novo3 = str_pad($nome, 20, "*", STR_PAD_LEFT);
            print "Meu sobrenome é $novo3";
        ?>
    </div>
</body>
</html>