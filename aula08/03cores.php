<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico"; //isset é usado para garantir um valor para a varivel, caso nao seja passado pela URL
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>  
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>; /*Passando um valor do php para um seletor CSS*/
            color: <?php echo $cor; ?>;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
        <a href="03exercicio.html">Voltar</a>
    </div>
</body>
</html>