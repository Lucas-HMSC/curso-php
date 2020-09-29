<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $ano = $_GET["ano"];
            $idade = 2020 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos.";
            $tipo = ($idade>17 and $idade<65) ? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
            echo " E dessa forma, seu voto é $tipo.";
        ?>
    </div>
</body>
</html>