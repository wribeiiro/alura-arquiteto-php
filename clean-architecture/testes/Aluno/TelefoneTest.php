<?php

namespace Alura\Arquitetura\Testes\Aluno;

use Alura\Arquitetura\Dominio\Aluno\Telefone;
use PHPUnit\Framework\TestCase;

class TelefoneTest extends TestCase
{
    public function testTelefoneDevePoderSerRepresentadoComoString()
    {
        $telefone = new Telefone('24', '22222222');
        $this->assertSame('(24) 22222222', (string) $telefone);
    }

    public function testTelefoneComDddInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectDeprecationMessage('DDD inválido');
        new Telefone('ddd', '22222222');
    }

    public function testTelefoneComNumeroInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectDeprecationMessage('Número de telefone inválido');
        new Telefone('24', 'número');
    }
}
