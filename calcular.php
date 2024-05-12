<title>calcular.php</title>
<?php
// Obtener los números enviados desde el formulario
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
?>
