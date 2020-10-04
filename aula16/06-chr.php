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
            $letra = chr(67);
            print "A letra de código 67 é $letra";
            $letra2 = "C";
            print "<br/>A letra $letra tem código ".ord($letra2);
        ?>
    </div>
</body>
</html>