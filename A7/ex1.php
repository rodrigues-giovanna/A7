<?php
// Definição da função
function soma($num1, $num2) {
    $resultado = $num1 + $num2;
    return $resultado;
}

// Chamada da função e exibição do resultado
$x = 10;
$y = 5;
$saida = soma(num1: $x, num2: $y);
echo "A soma de $x e $y é: $saida";
?>
