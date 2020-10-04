<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $ini = $_GET["inicio"];
            $fin = $_GET["final"];
            $inc = $_GET["inc"];
            if ($ini > $fin) {
                while ($fin <= $ini) {
                    echo $ini."<br/>";
                    $ini -= $inc;
                }
            } elseif ($fin > $ini) {
                while ($ini <= $fin) {
                    echo $ini."<br/>";
                    $ini += $inc;
                }
            }
        ?>
        <br/>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>