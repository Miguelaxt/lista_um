<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo, Negativo ou Zero</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero">Digite um número para visualizar a classe do número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Olhar</button>
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar'])) {

            $numero = $_POST['numero'];

            if ($numero > 0) {
                echo "O número $numero é da classe dos positivos.";
            } else if ($numero < 0) {
                echo "O número $numero é da classe dos negativos.";
            } else {
                echo "O número é zero.";
            }
        }
    }
    ?>
</body>

</html>