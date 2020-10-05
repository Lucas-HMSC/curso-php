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
            $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
            $cont = substr_count($frase, "PHP"); //Retorna o numero de ocorrências da String
            print "PHP encontrado $cont vezes.";
        ?>
    </div>
</body>
</html>