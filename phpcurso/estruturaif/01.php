<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8"/>
    <title></title>
</head>
<body>
<div>
<?php

    $a = isset($_GET ["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo " Você nasceu em $a e tem $i anos <br/>";

    if ($i >= 18) {
        $v = "ja pode votar";
        $d = "ja pode dirigir";
    }
    else {
       $v = "não pode votar";
       $d = "não pode dirigir";
    }
    echo "você tem $a anos, nasceu no ano de $i e $v e $d";


?>
<a href="01.html">Voltar</a>
</div>
</body>
</html>