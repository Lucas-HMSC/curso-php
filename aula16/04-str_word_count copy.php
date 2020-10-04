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
            $frase = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt at quisquam soluta quidem vero possimus, excepturi doloribus libero nihil natus veritatis perspiciatis, saepe corrupti itaque, animi exercitationem tempore! Impedit, necessitatibus!";
            $cont = str_word_count($frase, 0); //Conta o número de palavras
            print "$cont <br/>";
            $cont_array = str_word_count($frase, 1); //Coloca as palavras em um array
            print_r($cont_array);
            print "<br/><br/>";
            $cont_array2 = str_word_count($frase, 2); //Coloca as palavras em um array, mantendo a ordem do posicionamento delas
            print_r($cont_array2);
        ?>
    </div>
</body>
</html>