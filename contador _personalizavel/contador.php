<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    $a = isset($_GET["valor1"])?$_GET["valor1"]: $o = "Valor 1 não digitada";
    $b = isset($_GET["valor2"])?$_GET["valor2"]: $o = "Valor 2 não digitada";
    $c = isset($_GET["incre"])?$_GET["incre"]:1;


    if ($a < $b) {

        while ($a < $b) {
            echo "$a ";
            $a += $c;
        }
    } else {
        while ($a > $b) {
            echo "$a ";
            $a -= $c;
        }
    }

    ?>
</body>

</html>