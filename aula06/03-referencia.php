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
            $a = 3;
            $b = &$a; //& usado para definir uma referencia
            $b += 5;
            echo "A varíavel A vale $a";
            echo "<br/>A varíavel B vale $b";
        ?>
    </div>
</body>
</html>