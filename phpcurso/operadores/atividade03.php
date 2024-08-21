<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UFT-8"/>
    <title></title>

    <style>
        h2{
            color: chocolate;
        }
    </style>
</head>
<body>
<?php
    echo "<h2>Atividade 03</h2>";

    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variavel A vale $a";
    echo "<br/>A variavel B vale $b";
?>
</body>
</html>