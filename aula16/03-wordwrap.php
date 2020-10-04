<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15</title>
    <link rel="stylesheet" href="../_css/estilo.css" />
</head>
<body>
    <div>
        <?php
            $t = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt at quisquam soluta quidem vero possimus, excepturi doloribus libero nihil natus veritatis perspiciatis, saepe corrupti itaque, animi exercitationem tempore! Impedit, necessitatibus!";
            $r = wordwrap($t, 20, "<br/>\n", false);
            print $r;
        ?>
    </div>
</body>
</html>