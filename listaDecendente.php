<?php

//Escribe un programa que ordene una lista de números de forma descendente utilizando el 
//algoritmo Bubble Sort. La lista puede contener duplicados y valores negativos. Asegúrate de manejar estos
//casos y muestra la lista antes y después de aplicar el algoritmo

function bubbleSort($arr){
    $length = count($arr);
    if($length <= 1) return "No se puede realizar la operación";

    for($i = 0; $i < $length -1; $i++){

        for($j = 0; $j <$length - $i-1; $j++){

            if($arr[$j] < $arr[$j +1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}
$arr = [8,7, 10, 1, 20, 16, 25, 3];
$resultado = bubbleSort($arr);
echo "Lista Desordenada";
print_r($arr);
echo "------------------------". "\n";
echo "Lista Ordenada";
print_r($resultado);

?>