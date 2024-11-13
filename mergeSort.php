<?php
function mergeSort(array $arr): array {
    // Si el array tiene un solo elemento, ya está ordenado.
    if (count($arr) <= 1) {
        return $arr;
    }

    // Divide el array a la mitad
    $middle = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    // Aplica recursivamente mergeSort a ambas mitades
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Combina las mitades ordenadas
    return merge($left, $right);
}

function merge(array $left, array $right): array {
    $result = [];

    // Mientras ambas mitades tengan elementos, se compara y ordena
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);  // Saca el primer elemento de $left
        } else {
            $result[] = array_shift($right); // Saca el primer elemento de $right
        }
    }

    // Agrega los elementos restantes de $left y $right, si los hay
    return array_merge($result, $left, $right);
}

$array = [38, 27, 43, 3, 9, 82, 10];
$sortedArray = mergeSort($array);

print_r($sortedArray);

?>