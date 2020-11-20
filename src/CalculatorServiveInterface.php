<?php

namespace Jrpc;


interface CalculatorServiveInterface
{
    public function add(int $x, int $y): int;

    public function sub(int $x, int $y): int;
}