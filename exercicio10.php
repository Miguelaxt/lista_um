<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sequência de Fibonacci</title>
</head>

<body>

    <h2>Informe o valor para gerar a sequência de Fibonacci</h2>

    <form method="post">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" required>
        <br><br>
        <input type="submit" value="Gerar Sequência">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $limite = intval($_POST["numero"]);

        if ($limite < 0) {
            echo "<p>Por favor, insira um número positivo.</p>";
        } else {
            echo "<h3>Sequência de Fibonacci até $limite:</h3>";
            $a = 0;
            $b = 1;

            if ($a <= $limite) echo $a . " ";
            if ($b <= $limite) echo $b . " ";

            while (true) {
                $c = $a + $b;
                if ($c > $limite) break;
                echo $c . " ";
                $a = $b;
                $b = $c;
            }
        }
    }
    ?>

</body>

</html>