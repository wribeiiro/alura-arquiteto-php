<?php

use Alura\DesignPattern\Venda\VendaServicoFactory;

require 'vendor/autoload.php';

$fabricaVenda = new \Alura\DesignPattern\Venda\VendaProdutoFactory(1000);
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);
