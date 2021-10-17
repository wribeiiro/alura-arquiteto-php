<?php

namespace Alura\Arquitetura\Aplicacao\Indicacao;

use Alura\Arquitetura\Dominio\Aluno\Aluno;

interface EnviaEmailIndicacao
{
    public function enviaPara(Aluno $alunoIndicado): void;
}
