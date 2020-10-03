<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $ano = isset($_GET["ano"]) ? $_GET["ano"]:1900;
            $idade = date("Y") - $ano;
            echo "Você nasceu em $ano e tem $idade anos. <br>";
            if ($idade < 16) {
                $tipoVoto = "não vota";
            } elseif (($idade >= 16 and $idade < 18) or ($idade > 65) ) {
                $tipoVoto = "voto opcional";
            } else {
                $tipoVoto = "voto obrigatório";
            }
            echo "Para essa idade, $tipoVoto.";
        ?>
        <br>
        <a href="exercicio02.html">Voltar</a>
    </div>
</body>
</html>