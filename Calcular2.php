<?php
if(isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    $suma = sumarDigitos($numero);
    
    // Si la suma tiene más de dos dígitos, continúa sumando
    while($suma >= 10000) {
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