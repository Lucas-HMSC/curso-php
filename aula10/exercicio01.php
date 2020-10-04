<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $o = isset($_GET["oper"])?$_GET["oper"]:1;
            switch ($o) {
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = pow($n, 3);
                    break;
                case 3:
                    $r = sqrt($n); //ou $n ^ (1/2)
                    break;   
            }
            echo "O resultado da operação solicitada foi <span class='foco'>$r</span>";
        ?>
        <br>
        <a href="exercicio01.html">Voltar</a>
    </div>
</body>
</html>