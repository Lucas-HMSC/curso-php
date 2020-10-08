<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 18</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <pre>
        <?php
            $v = array( "nome" => "Lucas",
                        "idade" => 21,
                        "peso" => 64);
            foreach($v as $k => $c) {
                print "O campo $k possui o conteúdo $c. <br/>";
            }
        ?>
        </pre>
    </div>
</body>
</html>