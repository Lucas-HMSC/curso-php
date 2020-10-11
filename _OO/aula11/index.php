<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - POO</title>
    <link rel="stylesheet" href="../../_css/estilo2.css" />
</head>
<body>
    <div>
        <pre>
        <?php
            require_once "Visitante.php";
            require_once "Aluno.php";
            require_once "Bolsista.php";

            $v = new Visitante();
            $v->setNome("Juvenal");
            $v->setIdade(33);
            $v->setSexo("Masculino");
            //print_r($v);

            $a = new ALuno();
            $a->setNome("Lucas");
            $a->setMatr(1111);
            $a->setIdade(21);
            $a->setSexo("Masculino");
            $a->setCurso("Ciências da Computação");
            $a->pagarMensalidade();
            print_r($a);

            $b = new Bolsista();
            $b->setMatr(2222);
            $b->setNome("Maria");
            $b->setBolsa(100);
            $b->setCurso("Educação Física");
            $b->setIdade(18);
            $b->pagarMensalidade();
            print_r($b);       
            
            
        ?>
        </pre>
    </div>
</body>
</html>