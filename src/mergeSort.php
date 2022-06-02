<?php

function mergeSort(array $lista): array
{
    if(count($lista) == 1 )
    {
        return $lista;
    }

    $meio = count($lista) / 2;
    $esq = array_slice($lista, 0, $meio);
    $dir = array_slice($lista, $meio);
    $esq = mergeSort($esq);
    $dir = mergeSort($dir);

    $GLOBALS["iteracoes"]++;

    return merge($esq, $dir);
}

function merge($esq, $dir): array
{
    $res = [];

    while (count($esq) > 0 && count($dir) > 0)
    {
        if($esq[0] > $dir[0])
        {
            $res[] = $dir[0];
            $dir = array_slice($dir , 1);
        }
        else
        {
            $res[] = $esq[0];
            $esq = array_slice($esq, 1);
        }
    }

    while (count($esq) > 0)
    {
        $res[] = $esq[0];
        $esq = array_slice($esq, 1);
    }

    while (count($dir) > 0)
    {
        $res[] = $dir[0];
        $dir = array_slice($dir, 1);
    }
    $GLOBALS["iteracoes"]++;
    return $res;
}
