<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalServico();

$item1 = new ItemOrcamento();
$item1->valor = 500;
$item2 = new ItemOrcamento();
$item2->valor = 1500;
$item3 = new ItemOrcamento();
$item3->valor = 1000;

$notaFiscal = $builder->paraEmpresa('1234654.', 'Vinicius Dias Tecnologia')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacoes('Esta nota fiscal foi construída com um construtor')
    ->constroi();

$notaFiscal2 = clone $notaFiscal;
$notaFiscal2->itens[] = new ItemOrcamento();

var_dump($notaFiscal2, $notaFiscal);
