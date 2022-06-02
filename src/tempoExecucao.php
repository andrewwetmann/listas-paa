<?php

require_once "bubbleSort.php";

function tempoExecucao(array $lista, string $funcao): float
{
    $inicio = microtime(true);
    $lista = $funcao($lista);
    $fim = microtime(true);
    $total = $fim - $inicio;

    return $total;
}

