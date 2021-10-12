<?php

require 'vendor/autoload.php';

$orcamentoZip = new \Alura\DesignPattern\Relatorio\OrcamentoZip();
$orcamento = new \Alura\DesignPattern\Orcamento();
$orcamento->valor = 500;

$orcamentoZip->exportar($orcamento);