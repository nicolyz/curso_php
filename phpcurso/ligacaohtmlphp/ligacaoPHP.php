<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8"/>
    <title></title>
</head>
<body>
<?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz de valor é $valor é $rq". number_format($rq,2);
?>

    <a href="ligacaoHTML.html">Voltar</a>
</body>
</html>