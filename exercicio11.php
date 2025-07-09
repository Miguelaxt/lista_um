<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Verificador de Palíndromo</title>
</head>

<body>

    <h2>Verifique se é palíndromo</h2>

    <form method="post">
        <label for="palavra">Digite uma palavra:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palavra = $_POST["palavra"];

        $palavraFormatada = strtolower(str_replace(' ', '', $palavra));

        $palavraInvertida = strrev($palavraFormatada);

        if ($palavraFormatada == $palavraInvertida) {
            echo "<p>\"$palavra\" é um palíndromo!</p>";
        } else {
            echo "<p>\"$palavra\" não é um palíndromo.</p>";
        }
    }
    ?>

</body>

</html>