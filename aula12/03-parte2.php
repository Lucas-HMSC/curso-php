<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $num = isset($_GET["num"])?$_GET["num"]:1;
            $c = 1;
            echo "Mostrando a Tabuada de $num: <br/>";
            while ($c <= 10) {
                echo "$num x $c = ".($num * $c)."<br/>";
                $c++;
            }
        ?>
        <br/>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>