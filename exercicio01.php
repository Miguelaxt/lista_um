<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Verificar Par ou Ímpar</title>
</head>

<body>

    <h2>Digite um número para verificar se é par ou ímpar:</h2>

    <form method="post" action="">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero % 2 == 0) {
            echo "<p>O número $numero é par.</p>";
        } else {
            echo "<p>O número $numero é ímpar.</p>";
        }
    }
    ?>

</body>

</html>