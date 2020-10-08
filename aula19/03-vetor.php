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
            array_unshift($v, "Nome:"); //Adiciona ao inicio do vetor
            //array_shift($v); Remove o primeiro elemento
            print_r($v);
        ?>
        </pre>
    </div>
</body>
</html>