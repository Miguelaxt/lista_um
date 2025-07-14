<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contar Vogais</title>
</head>

<body>

    <h2>Contador de Vogais</h2>

    <form method="post">
        <label for="texto">Digite uma frase ou palavra:</label><br>
        <input type="text" id="texto" name="texto" required><br><br>
        <input type="submit" value="Contar Vogais">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST['texto'];
        $vogais = ['a', 'e', 'i', 'o', 'u'];
        $contador = 0;

        $texto = strtolower($texto);

        for ($i = 0; $i < strlen($texto); $i++) {
            if (in_array($texto[$i], $vogais)) {
                $contador++;
            }
        }

        echo "<p>Quantidade de vogais: $contador</p>";
    }
    ?>

</body>

</html>