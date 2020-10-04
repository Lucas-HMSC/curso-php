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
            $p = "Leite";
            $pr = 4.5;
            printf("O %s custa R$ %.2f", $p, $pr);
            /*
            * printf()
            * %d -> valor decimal (positivo ou negativo)
            * %u -> valor decimal sem sinal (apenas positivos)
            * %f -> valor real
            * %s -> string
            */
        ?>
    </div>
</body>
</html>