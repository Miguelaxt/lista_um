<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Divisores de um Número</title>
</head>
<body>
    <h2>Descubra os divisores de um número</h2>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" min="1" required>
        <button type="submit" name="verificar">Verificar divisores</button>
    </form>

    <?php
  
    function encontrarDivisores($num) {
        $divisores = [];
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $divisores[] = $i;
            }
        }
        return $divisores;
    }

   
    if (isset($_POST['verificar'])) {
        $numero = intval($_POST['numero']);
        $divisores = encontrarDivisores($numero);

        echo "<p>Divisores de <strong>$numero</strong>:</p>";
        echo "<ul>";
        foreach ($divisores as $div) {
            echo "<li>$div</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>