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
            $v[] = "H"; //outra forma -> array_push($v, "H")
            print_r($v);
            array_pop($v); //Remove o último valor
        ?>
        </pre>
    </div>
</body>
</html>