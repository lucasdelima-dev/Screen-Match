<?php 

$caminhoArquivo = __DIR__ . '/filme.json';
$conteudoArquivosFilme = file_get_contents($caminhoArquivo);
$filme = json_decode($conteudoArquivosFilme, true);

var_dump($filme);