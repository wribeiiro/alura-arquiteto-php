<?php

use Alura\Arquitetura\Dominio\Aluno\Aluno;
use Alura\Arquitetura\Infra\Aluno\RepositorioDeAlunoEmMemoria;

require 'vendor/autoload.php';

$cpf = $argv[1];
$nome = $argv[2];
$email = $argv[3];
$ddd = $argv[4];
$numero = $argv[5];

$aluno = Aluno::comCpfNomeEEmail($cpf, $nome, $email)->adicionarTelefone($ddd, $numero);
$repositorio = new RepositorioDeAlunoEmMemoria();
$repositorio->adicionar($aluno);
