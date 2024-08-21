<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8"/>
    <title></title>
</head>
<body>
<div>
<?php
    $n1= $_GET["a"];
    $n2= $_GET["b"];
    echo "<h2>Valores recebidos $n1 e $n2</h2>";
    $n3= $n1 + $n2;

    echo "a soma entre $n1 e $n2 é $n3";
    echo "</br>a soma entre $n1 e $n2 é ". ($n1 + $n2);
    echo "</br>a subtração entre $n1 e $n2 é ". ($n1 - $n2);
    echo "</br>a multiplicação entre $n1 e $n2 é ". ($n1 / $n2);
    echo "</br>a multiplicação entre $n1 e $n2 é ". ($n1 * $n2);
    echo "</br>o modulo vale ". ($n1 % $n2);

?>
</div>
</body>
</html>