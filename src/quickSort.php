<?php

function quickSort(array $lista): array
{
    $inicio = $fim = array();
    if(count($lista) < 2) {
        return $lista;
    }

    $chavePonteiro = key($lista);
    $ponteiro = array_shift($lista);
    foreach($lista as $valor) {
        if($valor <= $ponteiro) {
            $inicio[] = $valor;
        }
        elseif ($valor > $ponteiro) {
            $fim[] = $valor;
        }
        $GLOBALS["iteracoes"]++;
    }
    return array_merge(quickSort($inicio),array($chavePonteiro=>$ponteiro),quickSort($fim));
}