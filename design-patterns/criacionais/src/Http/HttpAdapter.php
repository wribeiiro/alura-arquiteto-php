<?php

namespace Alura\DesignPattern\Http;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}
