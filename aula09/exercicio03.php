<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <style>
        span.red {
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
            $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
            $media = ($n1 + $n2) / 2;
            echo "A média entre <span class='red'>".number_format($n1, 1)."</span> e <span class='red'>".number_format($n2,1)."</span> é igual a <span class='red'>".number_format($media, 1)."</span>.";
            if ($media >7 and $media <= 10) {
                $status = "<span class='red'>APROVADO</span>";
            } elseif ($media >= 5) {
                $status = "<span class='red'>RECUPERAÇÃO</span>";
            } else {
                $status = "<span class='red'>REPROVADO</span>";
            }
            echo "<br />Situação do aluno: $status";
        ?>
        <br>
        <a href="exercicio03.html">Voltar</a>
    </div>
</body>
</html>