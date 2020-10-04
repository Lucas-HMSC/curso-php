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
            $lorem = "Lorem ipsum dolor!";
            $vetor = explode(" ", $lorem); //Cria um array separando de acordo com o primeiro parâmetro
            print_r($vetor);
            print "<br/>";
            $vetor2 = str_split($lorem); //Cria um array com as letras separadas
            print_r($vetor2);
        ?>
    </div>
</body>
</html>