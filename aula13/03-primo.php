<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula X</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $num = $_GET["num"];
            print "<h2>Analisando o número $num...</h2>";
            print "Valores múltiplos: ";
            $cont = 0;
            for ($i = 1; $i <= $num; $i++) {
                if ($num % $i == 0) {
                    print "$i ";
                    $cont++;
                }
            }
            print "<br/>Total de múltiplos: $cont";
            if ($cont == 2) {
                $res = "<span class='foco'>É PRIMO</span>";
            } else {
                $res = "<span class='foco'>NÃO É PRIMO</span>";
            }
            print "<br/>Resultado: $num $res";
        ?>
        <br/>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>