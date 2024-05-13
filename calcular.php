<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio y número más cercano</title>
</head>
<body>
    <center>
        <h2>Calcular promedio y número más cercano</h2>
        <form action="" method="post">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1" required><br>
            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2" required><br>
            <label for="num3">Número 3:</label>
            <input type="number" name="num3" id="num3" required><br>
            <label for="num4">Número 4:</label>
            <input type="number" name="num4" id="num4" required><br>
            <label for="num5">Número 5:</label>
            <input type="number" name="num5" id="num5" required><br><br>
            <button type="submit" name="submit">Calcular</button><br>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $numeros = array(
                    $_POST['num1'],
                    $_POST['num2'],
                    $_POST['num3'],
                    $_POST['num4'],
                    $_POST['num5']
                );
                
                // Calcular el promedio
                $promedio = array_sum($numeros) / count($numeros);
                
                // Encontrar el número más cercano al promedio
                $numero_cercano = null;
                $distancia_minima = PHP_INT_MAX;
                foreach ($numeros as $numero) {
                    $distancia = abs($numero - $promedio);
                    if ($distancia < $distancia_minima) {
                        $distancia_minima = $distancia;
                        $numero_cercano = $numero;
                    }
                }
                
                // Mostrar el resultado
                echo "El promedio es: " . $promedio . "<br>";
                echo "El número más cercano al promedio es: " . $numero_cercano;
            }
        ?>
    </center>
</body>
</html>
