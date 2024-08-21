<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UFT-8"/>
    <title></title>
</head>
<body>
<?php
    $preco = $_GET["p"];
    echo "O preco do produto é R$ ".number_format($preco,2);
    $preco -= $preco*10/100;
    echo "<br/>o preço com ajuste de 10% de desconto será R$ $preco"
?>
</body>
</html>