<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href=""/>
    <meta charset="UFT-8"/>
    <title>Funções Aritmeticas</title>
    <style>
        h2{
            font-size: 20px;
            color: chocolate;
        }
    </style>
</head>
<body>
<?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];


    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 e ".abs($v2);


?>
</body>
</html>