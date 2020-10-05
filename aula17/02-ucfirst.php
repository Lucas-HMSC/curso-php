<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $nome = "lucAs carValHo";
            print "Seu nome é ".(ucfirst(strtolower($nome)));
            print "<br/>Seu nome é ".(ucwords(strtolower($nome)));
        ?>
    </div>
</body>
</html>