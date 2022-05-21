<?php

ini_set('memory_limit', '512M');

$relacaoVetores = [
    100 => "cem",
    1000 => "mil",
    10000 => "dezMil",
    20000 => "vinteMil",
    50000 => "cinquentaMil",
    100000 => "cemMil",
    200000 => "duzentosMil",
    500000 => "quinhentosMil",
    1000000 => "umMilhao",
    2000000 => "doisMilhoes",
    5000000 => "cincoMilhoes"
];

foreach ($relacaoVetores as $tamanho => $nomeArquivo) {
    $arq = fopen("../listas/{$nomeArquivo}.txt", "w");

    $lista = range(0, $tamanho - 1);

    shuffle($lista);

    foreach ($lista as $indice => $valor) {
        $indice === $tamanho - 1
            ? fwrite($arq, "{$valor}")
            : fwrite($arq, "{$valor} ");
    }

    fclose($arq);
}