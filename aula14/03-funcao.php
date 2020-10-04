<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            function soma() {
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for ($i = 0; $i < $t; $i++) {
                    $s += $p[$i];
                }
                return $s;
            }

            print "A soma dos valores 3, 5, 2, 8, 9 e 4 é ".(soma(3,5,2,8,9,4));
        ?>
    </div>
</body>
</html>