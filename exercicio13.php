<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Converter graus Celsius para Fahrenheit</title>
</head>

<body>

    <h2>Conversor</h2>

    <form method="post">
        <label for="celsius">Digite uma temperatura em Celsius:</label><br>
        <input type="number" id="celsius" name="celsius" required><br><br>
        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];
        $fahrenheit = ($celsius * 9/5) + 32;

        echo "<p>$celsius °C equivalem a $fahrenheit °F.</p>";
    }
    ?>

</body>

</html>