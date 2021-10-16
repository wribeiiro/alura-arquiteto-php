<?php

use Alura\Leilao\Dao\Leilao as LeilaoDao;
use Alura\Leilao\Infra\ConnectionCreator;
use Alura\Leilao\Model\Leilao;

require_once __DIR__ . '/vendor/autoload.php';

$pdo = new \PDO('sqlite::memory:');
$pdo->exec('create table leiloes (
    id INTEGER primary key,
    descricao TEXT,
    finalizado BOOL,
    dataInicio TEXT
);');
$leilaoDao = new LeilaoDao($pdo);

$leilao1 = new Leilao('Leilão 1');
$leilao2 = new Leilao('Leilão 2');
$leilao3 = new Leilao('Leilão 3');
$leilao4 = new Leilao('Leilão 4');

$leilaoDao->salva($leilao1);
$leilaoDao->salva($leilao2);
$leilaoDao->salva($leilao3);
$leilaoDao->salva($leilao4);

header('Content-type: application/json');
echo json_encode(array_map(function (Leilao $leilao) {
    return [
        'descricao' => $leilao->recuperarDescricao(),
        'estaFinalizado' => $leilao->estaFinalizado(),
    ];
}, $leilaoDao->recuperarNaoFinalizados()));