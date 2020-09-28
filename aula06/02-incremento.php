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
            /* 
            Esse exercício pretende demonstrar
            o uso de operadores de incremento e
            decremento
            @author Lucas-HMSC
            */ 
            $atual = $_GET["aa"]; #Passagem de parâmetros pela URL
            echo "O ano atual é $atual e o ano anterior é ".--$atual;
        ?>
    </div>
</body>
</html>