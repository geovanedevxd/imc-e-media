<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>

<body>

    <h2>Calculadora de IMC</h2>

    <form action="" method="post">
        Peso (kg): <input type="text" required name="peso"><br>
        Altura (m): <input type="text" required pattern="\d+.\d{2}" name="altura"><br>
        <input type="submit" value="calcular"><br>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $imc = $peso / ($altura * $altura);
        echo "Seu IMC é :  " . number_format($imc, 2) . "<br>";

        $virgula = " , ";
        $ponto = str_replace(" , ", " . ", $virgula);
        echo $ponto;

        if ($imc < 17) {
            echo 'Muito abaixo do peso';
        } elseif ($imc >= 17 && $imc < 18.5)
            echo 'Abaixo do peso';
        elseif ($imc >= 18.5 && $imc < 25)
            echo 'Peso normal';
        elseif ($imc >= 25 && $imc < 30)
            echo 'Acima do peso';
        elseif ($imc >= 30 && $imc < 35)
            echo 'Obesidade I';
        elseif ($imc >= 35 && $imc < 40)
            echo 'Obesidade II (severa)';
        elseif ($imc > 40)
            echo 'Obesidade III (mórbida)';

    }

    ?>
</body>

</html>