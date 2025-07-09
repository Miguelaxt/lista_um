<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero">Digite um número para ver a tabuada:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular">Calcular Tabuada</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['calcular'])) {
            $numero = (int) $_POST['numero'];
            echo "<h2>Tabuada do número $numero</h2>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "$numero x $i = $resultado<br>";
            }
        }
    }
    ?>
</body>

</html>