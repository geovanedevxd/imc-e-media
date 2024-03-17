<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>

<body>
    <h2>Calculadora de Média</h2>

    <form action="" method="post">
        Nota 1: <input type="text" name="nota1"><br>
        Nota 2: <input type="text" name="nota2"><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
            $media = ($nota1 + $nota2) / 2;
            $resultadoMedia = ($nota1 + $nota2) / 2;
            echo "Sua média é: " . $resultadoMedia;
            if ($media < 4) {
                echo "Reprovado";
            } elseif ($media >= 4 && $media < 6) {
                echo "Exame Final";
            } elseif ($media > 6){
                echo "Aprovado";
            }
            

        }
    ?>
</body>

</html>