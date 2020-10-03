<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula X</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]" ;
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[não informado]";
            $idade = date("Y") - $ano; //Y -> 2020 // y -> 20
            echo "$nome é $sexo e tem $idade anos.";
        ?>
        <a href="02exercicio.html">Voltar</a>
    </div>
</body>
</html>