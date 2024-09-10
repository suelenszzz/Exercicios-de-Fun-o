<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Conversão de Temperaturas de Fahrenheit para Celsius</h2>
    <form method="post">
        <label for="temperatura"> Insira a temperatura em Fahrenheit: </label><br>
        <input type="number" id="temperatura" name="temperatura" required><br><br>
        <input type="submit" value="Converter">
</form>

<?php
    function converter($fahr){
        return ($fahr-32)*5/9;
    } 
    
    $temperatura = $_POST['temperatura'] ?? 100;
    $celsius = converter($temperatura)??0;
    echo "Temperatura em Fahrenheit: $temperaturaºF - Em Celcius".round($celsius,2)."ºC<br>";
?>

</body>
</html>