<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UFT-8"/>
    <title>Atividade 01 - Aula 7</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        $tipo = $_GET["op"];

        echo "Os valores passados são $n1 e $n2 <br/>";

        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;

        echo "O resultado será $r";


    ?>
</body>
</html>