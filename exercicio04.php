<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <form method="POST" action="">
    <label for="numero">Digite um número :</label>
    <input type="number" id="numero" name="numero" min="0" required>
    <button type="submit" name="calcular">Calcular Fatorial</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calcular'])) {
    $n = (int) $_POST['numero'];
    $fatorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fatorial *= $i;
    }
    echo "$n! = $fatorial";

}
?>
</body>
</html>