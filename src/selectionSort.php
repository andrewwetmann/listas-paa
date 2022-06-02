<?php

function selectionSort(array $lista): array
{
    for($i = 0; $i < count($lista) - 1; $i++, $GLOBALS["iteracoes"]++){
        $min = $i;
        for($j= $i + 1; $j < count($lista); $j++, $GLOBALS["iteracoes"]++){
            if ($lista[$j] < $lista[$min])
                $min = $j;
        }
        $x = $lista[$min];
        $lista[$min] = $lista[$i];
        $lista[$i] = $x;
    }

    return $lista;
}