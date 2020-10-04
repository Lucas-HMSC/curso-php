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
        <form action="02-parte2.php" method="get">
            <?php
                $c = 1;
                while ($c <= 5) {
                    echo "<label for='n$c'>Valor $c: </label>
                    <input type='number' name='v$c' id='n$c' max='100' min='0' value='0'>
                    <br>";
                    $c++;
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>