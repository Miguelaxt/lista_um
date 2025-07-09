<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Números Pares</title>
</head>

<body>
    <h2>Informe o número que deseja descobrir quantos números pares são necessários para chegar no número desejado</h2>

    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" min="1" required>
        <button type="submit" name="contar">Contar</button>
    </form>

    <?php
    if (isset($_POST['contar'])) {
        $numero = intval($_POST['numero']);

        $quantidadePares = floor($numero / 2);

        echo "<p>Entre 1 e $numero, existem $quantidadePares números pares.</p>";
    }
    ?>
</body>

</html>