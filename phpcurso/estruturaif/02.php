<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8"/>
    <title></title>
</head>
<body>
<div>
<?php
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "Voce nasceu em $a e tem $i anos <br/>";

    if ($i < 16) {
        $tipoVoto = "não vota";
    }
    elseif ($i >= 16 && $i < 18) {
            $tipoVoto = "voto opcional";
        }

        else {
            $tipoVoto = "voto obrigatorio";
        }



    echo "para essa idade, $tipoVoto"
?>
</div>
</body>
</html>