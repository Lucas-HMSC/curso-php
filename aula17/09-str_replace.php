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
            $frase = "Gosto de estudar Matemática!!! Matemática é toop :)";
            $novafrase = str_ireplace("matemática", "PHP", $frase); //Substituindo palavras ignorando o case sensitive      
            print $novafrase;
        ?>
    </div>
</body>
</html>