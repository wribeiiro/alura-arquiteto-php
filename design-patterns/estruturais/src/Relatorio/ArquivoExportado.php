<?php

namespace Alura\DesignPattern\Relatorio;

interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}