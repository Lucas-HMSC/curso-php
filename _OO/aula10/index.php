<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - POO</title>
    <link rel="stylesheet" href="../../_css/estilo2.css" />
</head>
<body>
    <div>
        <pre>
        <?php
            require_once "Pessoa.php";
            require_once "Aluno.php";
            require_once "Professor.php";
            require_once "Funcionario.php";

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Maria");
            $p2->setNome("Lucas");
            $p3->setNome("Guanabara");
            $p4->setNome("Lucas");

            $p2->setCurso("Ciências da Computação");
            $p4->setSetor("Desenvolvimento Web");

            $p1->setSexo("Feminino");
            $p2->setSexo("Masculino");
            $p3->setSexo("Masculino");
            $p4->setSexo("Masculino");

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
        </pre>
    </div>
</body>
</html>