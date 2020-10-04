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
            $estado = isset($_GET["estados"])?$_GET["estados"]:"Estado não selecionado";
            switch ($estado) {
                case "AC":
                case "AM":
                case "AP":
                case "RO":
                case "RR":
                case "PA":
                case "TO":
                    $regiao = "Norte";
                    break;
                case "SP":
                case "RJ":
                case "ES":
                case "MG":
                    $regiao = "Sudeste";
                    break;
                case "SC":
                case "PR":
                case "RS":
                    $regiao = "Sul";
                    break;
                case "DF":
                case "GO":
                case "MT":
                case "MS":
                    $regiao = "Centro-Oeste";
                    break;
                case "AL":
                case "BA":
                case "CE":
                case "MA":
                case "PB":
                case "PE":
                case "PI":
                case "RN":
                case "SE":
                    $regiao = "Nordeste";
                    break;
                default:
                    echo "Estado inválido.";
            }
            echo "Você mora na <span class='foco'>Região $regiao</span>"
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>