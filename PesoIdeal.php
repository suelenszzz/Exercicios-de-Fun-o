<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso Ideal</title>
</head>
<body>
    <h2>Peso Ideal</h2>
    <form method="post">
        <label for="altura">Altura: </label><br>
        <input type="number" id="altura" name="altura" placeholder= "Digite sua altura: " step= "0.01" required><br>
        <label for="sexo">Sexo: </label><br>
        <select id="sexo" name="sexo" required><br>
        <option value = "M">Masculino</option>
        <option value = "F">Feminino</option>
        </select>
        <input type="submit" value="Calcular">
    </form>

<?php
        

    function CalcularPesoIdeal($altura,$sexo){
        if( strtolower ($sexo) == 'M'){
            return round((72.2 * $altura) - 58,2);
        }elseif(strtolower ($sexo) == 'F'){
            return round((62.1 * $altura) - 44.7,2);
        }else {
            echo "invalido";
        }
        
    }
        $altura=$_POST['altura'];
        $sexo=$_POST['sexo'];

        echo "Peso ideial para $sexo com altura $altura m: ".pesoideal($altura,$sexo)."kg<br>";
    
?>

</body>
</html>