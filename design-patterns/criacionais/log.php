<?php

use Alura\DesignPattern\Log\{StdoutLogManager, FileLogManager};

require 'vendor/autoload.php';

$logManager = new FileLogManager(__DIR__ . '/log');
$logManager->log('info', 'Testando log manager');
