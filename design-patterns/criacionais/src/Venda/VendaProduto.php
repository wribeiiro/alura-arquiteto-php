<?php

namespace Alura\DesignPattern\Venda;

class VendaProduto extends Venda
{
    /**
     * @var int Peso do produto em gramas
     */
    private int $pesoProduto;

    public function __construct(\DateTimeInterface $dataRealizacao, int $pesoProduto)
    {
        parent::__construct($dataRealizacao);

        $this->pesoProduto = $pesoProduto;
    }
}
