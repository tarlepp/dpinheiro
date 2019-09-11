<?php

namespace App\Model;

class Foo
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $bars = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getBars(): array
    {
        return ['bar' => $this->bars];
    }
}
