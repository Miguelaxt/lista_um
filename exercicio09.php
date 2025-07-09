<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Soma Entre os Números</title>
</head>

<body>

    <h2>Informe dois números de sua escolha</h2>
    <form method="post">
        Número 1: <input type="number" name="num1" required><br><br>
        Número 2: <input type="number" name="num2" required><br><br>
        <input type="submit" value="Calcular Soma">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $soma = 0;

        $inicio = min($num1, $num2);
        $fim = max($num1, $num2);

        for ($i = $inicio; $i <= $fim; $i++) {
            $soma += $i;
        }

        echo "<h3>A soma dos números entre $inicio e $fim é: $soma</h3>";
    }
    ?>

</body>

</html>