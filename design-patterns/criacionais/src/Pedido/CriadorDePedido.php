<?php

namespace Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Orcamento;

class CriadorDePedido
{
    private array $templates = [];

    public function criaPedido(
        string $nomeCliente,
        string $dataFormatada,
        Orcamento $orcamento
    ): Pedido {
        $template = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
        $pedido = new Pedido();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    private function gerarTemplatePedido(
        string $nomeCliente,
        string $dataFormatada
    ): TemplatePedido {
        $hash = md5($nomeCliente . $dataFormatada);
        if (!array_key_exists($hash, $this->templates)) {
            $template = new TemplatePedido(
                $nomeCliente,
                new \DateTimeImmutable($dataFormatada)
            );

            $this->templates[$hash] = $template;
        }

        return $this->templates[$hash];
    }
}
