<?php

function bubbleSort(array $lista): array
{
    $etiqueta = 1;
    for($i = 0; $i < count($lista) - 1 && $etiqueta == 1; $i++, $GLOBALS["iteracoes"]++) {
        $etiqueta = 0;
        for($j = 0; $j < count($lista) - 1 - $i; $j++, $GLOBALS["iteracoes"]++){
            if($lista[$j] > $lista[$j + 1]) {
                $aux = $lista[$j];
                $lista[$j] = $lista[$j + 1];
                $lista[$j + 1] = $aux;
                $etiqueta = 1;
            }
        }
    }

    return $lista;
}