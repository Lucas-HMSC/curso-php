<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $n = isset($_GET["num"])?$_GET["num"]:1;
            for ($c = 1; $c <= 10; $c++) {
                print "$n x $c = ".($n * $c)."<br/>";
            }
        ?>
        <br/>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>