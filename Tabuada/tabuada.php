<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php  
$d = isset($_GET["minhaEscolha"]) ? $_GET["minhaEscolha"]: "minha escolha";
$J =$d;


$c =1;
do{
$u = ($J * $c);
echo(" $J X $c = $u <br> ");
$c++;
}while($c <= 10);
?>
</body>
</html>