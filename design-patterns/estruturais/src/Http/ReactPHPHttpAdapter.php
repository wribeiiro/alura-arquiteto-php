<?php

namespace Alura\DesignPattern\Http;

class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // instancio o react php
        // preparo os dados
        // faço a requisição
        echo "ReactPHP";
    }
}
