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
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1 + $nota2) / 2;
            echo "A média entre $nota1 e $nota2 é $m <br/>";
            //$sit = ($m < 6)?"REPROVADO":"APROVADO";
            echo "A situação do aluno é ".(($m < 6)?"REPROVADO":"APROVADO"); //Concatenando o operador unário diretamente no echo
        ?>
    </div>
</body>
</html>