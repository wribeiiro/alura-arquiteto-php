<?php

use Alura\DesignPattern\PdoConnection;

require 'vendor/autoload.php';

$pdo = PdoConnection::getInstance('sqlite::memory:');
// $pdo->query('');

$pdo2 = PdoConnection::getInstance('sqlite::memory:');

$pdo2->bindValue();

var_dump($pdo, $pdo2);
