<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $a =isset($_GET["nota1"])?$_GET["nota1"]:$o= "Nota1 não digitada";
    $b =isset($_GET["nota2"])?$_GET["nota2"]:$o= "Nota não digitada";
    $c= ($a+$b)/2;
    echo"A média entre a nota 1: <strong style=color:#FF0000;>$a</strong> e a nota 2: <strong style=color:#FF0000>$b</strong> é : <strong style=color:#FF0000>$c</strong> "
    
    
    
    ?>
    <br/>

<a href="media.html">Voltar</a>



</body>
</html>