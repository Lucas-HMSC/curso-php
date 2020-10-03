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
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "A raiz quadrada de $valor é ".number_format($rq, 2);
        ?>
        <a href="01exercicio.html">Voltar</a>
    </div>
</body>
</html>