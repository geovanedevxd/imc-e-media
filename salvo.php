<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function calcularIMC($peso, $altura)
    {
        $imc = $peso / ($altura * $altura);
        return $imc;
    }

    $peso = 70; // em quilogramas
    $altura = 1.75; // em metros
    
    $resultadoIMC = calcularIMC($peso, $altura);
    echo "Seu IMC é: " . $resultadoIMC;
    ?>
</body>

</html>