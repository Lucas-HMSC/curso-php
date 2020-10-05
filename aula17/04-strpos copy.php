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
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP"); //Procura pela ocorrência da string passada, diferindo por case sensitive
            $pos1 = stripos($frase, "php"); //Procura pela ocorrência da string passada, não diferindo por case sensitive
            print "$frase <br/>A String 'PHP' foi encontrada na posição $pos e $pos1";
        ?>
    </div>
</body>
</html>