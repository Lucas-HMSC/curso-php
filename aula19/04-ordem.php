<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 19</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <pre>
        <?php
            $v = array("L", "U", "C", "A", "S");
            sort($v); //Realiza a ordenação do vetor, tanto números quanto letras
            print_r($v);
            rsort($v); //Realiza a ordenação decrescente
            print_r($v);
            asort($v); //Ordena mantendo os indices
            print_r($v);
            arsort($v); //Realiza a ordenação decrescente mantendo os indices
            print_r($v);
            ksort($v); //Realiza a ordenação dos indices
            print_r($v);
            krsort($v); //Realiza a ordenação decrescente dos indices
            print_r($v);
        ?>
        </pre>
    </div>
</body>
</html>