<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $d = isset($_GET["minhaEscolha"]) ? $_GET["minhaEscolha"] : 0;

    switch ($d) {
        case 1:
            $v = "Distrito Federal";
        case 2:
            $v = "Goiás";
        case 3:
            $v = "Mato Grosso";
        case 4:
            $v = "Mato Grosso do Sul";
            echo "<strong style=color:#FF0000; font-size:24px;> $v </strong> este estado petence a região <strong style=color:#FF0000; font-size:24px;> Centro-Oeste </strong>";
            break;
        case 5:
            $v = "Alagoas";
        case 6:
            $v = "Bahia";
        case 7:
            $v = "Ceará";
        case 8:
            $v = "Maranhão";
        case 9:
            $v = "Paraiba";
        case 10:
            $v = "Pernambuco";
        case 11:
            $v = "Piaui";
        case 12:
            $v = "Rio Grande do Norte";
        case 13;
            $v = "Sergipe";
            echo "<strong style=color:#FF0000; font-size:24px;> $v </strong> este estado petence a região <strong style=color:#FF0000; font-size:24px;> Nordeste </strong>";
            break;
        case 14:
            $v = "Acre";
        case 15:
            $v = "Amapá";
        case 16:
            $v = "Amazonas";
        case 17:
            $v = "Pará";
        case 18:
            $v = "Rondônia";
        case 19:
            $v = "Roraima";
        case 20;
            $v = "Tocantins";
            echo "<strong style=color:#FF0000; font-size:24px;> $v </strong> este estado petence a região <strong style=color:#FF0000; font-size:24px;> Norte </strong>";
            break;
        case 21:
            $v = "Espirito Santo";
        case 22;
            $v = "Minas Gerais";
        case 23:
            $v = "Rio de Janeiro";
        case 24:
            $v = "São Paulo";
            echo "<strong style=color:#FF0000; font-size:24px;> $v </strong> este estado petence a região <strong style=color:#FF0000; font-size:24px;> Sudeste </strong>";
            break;
        case 25:
            "Paraná";
        case 26:
            $v = "Rio Grande do Sul";
        case 27:
            $v= "Santa Catarina";
            echo "<strong style=color:#FF0000; font-size:24px;> $v </strong> este estado petence a região <strong style=color:#FF0000; font-size:24px;> Sul </strong>";
            break;
    }




    ?>
</body>

</html>