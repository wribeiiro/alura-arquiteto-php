<?php

namespace Alura\DesignPattern;

class PdoConnection extends \PDO
{
    private static ?self $instance = null;

    private function __construct($dsn, $username = null, $passwd = null, $options = null)
    {
        parent::__construct($dsn, $username, $passwd, $options);
    }

    public static function getInstance($dsn, $username = null, $passwd = null, $options = null): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new static($dsn, $username = null, $passwd = null, $options = null);
        }

        return self::$instance;
    }
}
