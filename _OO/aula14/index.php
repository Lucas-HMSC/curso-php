<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - POO</title>
    <link rel="stylesheet" href="../../_css/estilo2.css" />
</head>
<body>
    <div>
        <pre>
        <?php
            require_once "Video.php";
            require_once "Gafanhoto.php";

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");

            $g[0] = new Gafanhoto("Lucas", 21, "Masculino", "Lucas-HMSC");
            $g[1] = new Gafanhoto("Maria", 18, "Feminino", "Maria_Clara");
            
            print_r($v);
            print_r($g);
        ?>
        </pre>
    </div>
</body>
</html>