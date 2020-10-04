<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <form action="03-parte2.php" method="get">
            <label for="numID">Número: </label>
            <select name="num" id="numID">
            <?php
                $c = 1;
                while ($c <= 10) {
                echo "<option>$c</option>";
                $c++;
                }
            ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>
</html>