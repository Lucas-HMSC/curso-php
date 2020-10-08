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
            <table border="1">
            <tr>
        <?php
            $c = range(5, 20, 2);
            foreach($c as $v) {
                print "<td>$v ";
            }
        ?>
            </table>
        </pre>
    </div>
</body>
</html>