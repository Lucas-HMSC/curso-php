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
            $c = 1;
            $d = 10;
            while ($c <= 10 and $d >=1) {
                echo $c ." // ".$d."<br/>";
                $c++;
                $d--;
            }
        ?>
    </div>
</body>
</html>