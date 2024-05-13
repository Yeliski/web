<!DOCTYPE html>
<html lang="en">
<head>
    <center><meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Suma de dígitos</title>
    </head>
    <body>
        <h2>Calcular la suma de dígitos</h2>
        <form action="" method="post">
            <label for="numero">Número entero de 5 dígitos:</label>
            <input type="number" name="numero" id="numero"><br>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if(isset($_POST['numero'])) {
                $numero = $_POST['numero'];
                $suma = sumarDigitos($numero);
                
                // Si la suma tiene más de dos dígitos, continúa sumando
                while($suma >= 10) {
                    $suma = sumarDigitos($suma);
                }
                echo "La suma de los dígitos es: " . $suma;
            }

            function sumarDigitos($numero) {
                $suma = 0;
                while ($numero != 0) {
                    $digito = $numero % 10;
                    $suma += $digito;
                    $numero = floor($numero / 10);
                }
                return $suma;
            }

?>
    </center>
</body>
</html>
