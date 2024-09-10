<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Conversão de Moedas</h2>
    <form method="post">
        <label for="valorDolar">Valor em Dolar ($) </label><br>
        <input type="number" id="valorDolar" name="valorDolar" placeholder= "Digite o valor em dolares: " step= "0.01" required><br>
        <input type="submit" value="Converter">
</form>

<?php

    function dolarParaReal($valorDolar,$cotacao){
        return round($valorDolar * $cotacao,2);
    }

    $valorDolar=$_POST['valorDolar'];
    $cotacao = 1.81;
 
    echo "$$valorDolar equivalem a R$".valorReal($valorDolar,$cotacao)."reais";
?>

</body>
</html>