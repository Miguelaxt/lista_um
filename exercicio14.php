<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Verificar Ano Bissexto</title>
</head>

<body>

    <h2>Verifique se um ano é bissexto</h2>

    <form method="post">
        <label for="ano">Digite o ano:</label><br>
        <input type="number" name="ano" id="ano" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ano = $_POST["ano"];

        if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
            echo "<p>O ano $ano é bissexto.</p>";
        } else {
            echo "<p>O ano $ano não é bissexto.</p>";
        }
    }
    ?>

</body>

</html>