<?php

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Imposto;

interface VendaFactory
{
    public function criarVenda(): Venda;
    public function imposto(): Imposto;
}
