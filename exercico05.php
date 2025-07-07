<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST" action="">
        <label for="numero1">Digite o número 1:</label>
        <input type="number" id="numero1" name="numero1" min="0" required><br><br>

        <label for="numero2">Digite o número 2:</label>
        <input type="number" id="numero2" name="numero2" min="0" required><br><br>

        <button type="submit" name="calcular">Descubra se são números amigos</button>
    </form>

 <?php
    
    function somaDivisores($num) {
        $soma = 0;
        for ($i = 1; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                $soma += $i;
            }
        }
        return $soma;
    }

    
    if (isset($_POST['calcular'])) {
        $num1 = intval($_POST['numero1']);
        $num2 = intval($_POST['numero2']);

        
    if (somaDivisores($num1) == $num2 && somaDivisores($num2) == $num1) {
            echo "<p><strong>$num1</strong> e <strong>$num2</strong> são números amigos! </p>";
        } else {
            echo "<p><strong>$num1</strong> e <strong>$num2</strong> NÃO são números amigos. </p>";
        }
    }
    ?>
</body>
</html>