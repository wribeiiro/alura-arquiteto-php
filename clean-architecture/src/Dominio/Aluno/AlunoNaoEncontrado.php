<?php

namespace Alura\Arquitetura\Dominio\Aluno;

use Alura\Arquitetura\Dominio\Cpf;

class AlunoNaoEncontrado extends \DomainException
{
    public function __construct(Cpf $cpf)
    {
        parent::__construct("Aluno com CPF $cpf não encontrado");
    }
}
