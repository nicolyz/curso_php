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
  echo "<h2>Operadores de Atribuição</h2>";
    $a = 7;
    $b = 9;

   $a= $a/$b;

   echo "o resultado da divisão é ". number_format($a,2,",",".")


?>
</body>
</html>