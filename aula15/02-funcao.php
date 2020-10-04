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
            include "funcoes.php";
            //require "funcoes2.php" (Em caso de requerir um arquivo que não existe, o carregamento é interrompido imediantamente. AO contrário do include, que tenta continuar o carregamento da página)
            print "<h1>Testando novas funcões</h1>";
            ola();
            mostraValor(4);
            print "<h2>Finalizando Programa...</h2>";
        ?>
    </div>
</body>
</html>