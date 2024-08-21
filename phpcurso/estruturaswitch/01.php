<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UFT-8"/>
    <title></title>
</head>
<body>

<div>
<?php
    $n = isset($_GET["num"])?$_GET["num"]:0;
    $o = isset($_GET["oper"])?$_GET["oper"]:1;

    switch ($o) {
        case 1:
            $re = $n * 2;
            break;
        case 2:
            $re = $n^3;
            break;
        case 3 :
            $re = sqrt($n); // $n ^(1/2)
        default;

    }

    echo "O resultado da operação foi $re";

?>

</div>
</body>
</html>