<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - POO</title>
    <link rel="stylesheet" href="../../_css/estilo2.css" />
</head>
<body>
    <div>
        <pre>
        <?php
            require_once "ContaBanco.php";

            $p1 = new ContaBanco();
            $p2 = new ContaBanco();

            $p1 -> abrirConta("CC");
            $p1 -> setDono("Jubileu");
            $p1 -> setNumConta(1111);
            $p1 -> depositar(300);
            $p1 -> pagarMensal();
            $p1 -> sacar(338);
            $p1 -> fecharConta();

            $p2 -> abrirConta("CP");
            $p2 -> setDono("Creuza");
            $p2 -> setNumConta(2222);
            $p2 -> depositar(500);
            $p2 -> sacar(1000);
            $p2 -> pagarMensal();
            $p2 -> sacar(630);
            $p2 -> fecharConta();

            print_r($p1);
            print_r($p2);
        ?>
        </pre>
    </div>
</body>
</html>