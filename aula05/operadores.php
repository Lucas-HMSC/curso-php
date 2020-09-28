<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<h2>Valores recebidos: $n1 e $n2</h2>";
            $media = ($n1 + $n2) / 2;
            echo "A soma entre $n1 e $n2 é igual a ".($n1 + $n2);
            echo "<br/>A subtração entre $n1 e $n2 é igual a ".($n1 - $n2);
            echo "<br/>A multiplicação entre $n1 e $n2 é igual a ".($n1 * $n2);
            echo "<br/>A divisão entre $n1 e $n2 é igual a ".($n1 / $n2);
            echo "<br/>O módulo entre $n1 e $n2 é igual a ".($n1 % $n2);
            echo "<br/>A média entre $n1 e $n2 é igual a $media";
        ?>
    </div>
</body>
</html>