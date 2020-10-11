<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - POO</title>
    <link rel="stylesheet" href="../../_css/estilo2.css" />
</head>
<body>
    <div>
        
        <?php
            require_once "Pessoa.php";
            require_once "Livro.php";

            $p[0] = new Pessoa("Lucas", 21, "M");
            $p[1] = new Pessoa("Maria", 18, "F");

            $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
            $l[2] = new Livro("Trono Destruído", "Victoria Aveyard", 500, $p[1]);

            $l[0]->abrir();
            $l[0]->detalhes();

            $l[2]->abrir();
            $l[2]->detalhes();
        ?>
        
    </div>
</body>
</html>