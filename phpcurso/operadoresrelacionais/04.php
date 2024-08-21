<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8"/>
    <title></title>
</head>
<body>
<?php
    $ano = $_GET["an"];
    $idade = 2024 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade anos";
    $tipo = (idade>=18 && $idade<65)? "OBRIGATORIO":"NÃO OBRIGATORIO";
    echo "E dessa forma o seu voto é $tipo";

?>
</body>
</html>