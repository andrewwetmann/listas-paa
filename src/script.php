<?php

$iteracoes = 0;

ini_set('memory_limit', '1024M');

require_once "insertionSort.php";
require_once "selectionSort.php";
require_once "bubbleSort.php";
require_once "quickSort.php";
require_once "mergeSort.php";
require_once "tempoExecucao.php";

$algoritmosOrdenacao = [
    "insertionSort",
    "selectionSort",
    "bubbleSort",
    "quickSort",
    "mergeSort"
];

$relacaoVetores = [
    100 => "cem",
    1000 => "mil",
    10000 => "dezMil",
    20000 => "vinteMil",
    50000 => "cinquentaMil",
    100000 => "cemMil",
    200000 => "duzentosMil",
    500000 => "quinhentosMil",
    1000000 => "umMilhao"
];

$arq = fopen("../relatorio.csv", "w");

fwrite($arq, "Algoritmo,Tamanho da Lista,Tempo de execução,Número de iterações" . PHP_EOL);
foreach ($relacaoVetores as $tamanho => $nomeArquivo) {
    $conteudoArquivo = file_get_contents("../listas/{$nomeArquivo}.txt");

    $lista = explode(" ", $conteudoArquivo);

    foreach ($algoritmosOrdenacao as $algoritmo) {
        $GLOBALS["iteracoes"] = 0;
        fwrite($arq, "{$algoritmo},{$tamanho},");

        $tempoTotal = tempoExecucao($lista, $algoritmo);
        $tempoTotal = str_replace(".", ",", $tempoTotal);

        fwrite($arq, "\"{$tempoTotal}\",{$iteracoes}");

        fwrite($arq, PHP_EOL);
    }
}

fclose($arq);