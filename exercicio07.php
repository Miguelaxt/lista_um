<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Números Perfeitos</title>
</head>
<body>
    <h2>Verifique se um número é perfeito</h2>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" min="1" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    
    function somaDivisoresProprios($num) {
        $soma = 0;
        for ($i = 1; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                $soma += $i;
            }
        }
        return $soma;
    }

    
    if (isset($_POST['verificar'])) {
        $numero = intval($_POST['numero']);
        $soma = somaDivisoresProprios($numero);

        echo "<p>A soma dos divisores próprios de $numero é $soma.</p>";

        if ($soma == $numero) {
            echo "<p>$numero é perfeito! </p>";
        } else {
            echo "<p>$numero não é perfeito! </p>";
        }
    }
    ?>
</body>
</html>