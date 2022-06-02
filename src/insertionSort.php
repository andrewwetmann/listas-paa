<?php

function insertionSort(array $lista): array
{
    for ($i = 1; $i < count($lista); $i++, $GLOBALS["iteracoes"]++) {

        $j = $i;

		while ($j > 0 && $lista[$j] < $lista[$j - 1]) {
            $aux = $lista[$j];
			$lista[$j] = $lista[$j - 1];
			$lista[$j - 1] = $aux;
			$j -= 1;
            $GLOBALS["iteracoes"]++;
		}

	}

    return $lista;
}