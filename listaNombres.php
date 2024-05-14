<?php

//Crea un script que ordene una lista de nombres en orden alfabético utilizando el algoritmo Insertion
//Muestra la lista antes y después de aplicar el algoritmo

function insertionSort($arr) {
    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        

        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }

    return $arr;
}

$arr = ["Carlos", "Joel", "Adonay", "Berna", "Saul"];
$resultado = insertionSort($arr);
echo "Lista Desordenada";
print_r($arr);
echo "------------------------". "\n";
echo "Lista Ordenada";
print_r($resultado);
?>