<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            function teste(&$x) {
                $x += 2;
                print "<p>O valor de X é $x</p>";
            }

            $a = 3;
            teste($a);
            print "<p>O valor de A é $a</p>";
        ?>
    </div>
</body>
</html>