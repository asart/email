<?php

namespace Core;

class Config
{
    public $data;

    public function __construct()
    {
        $this->data = include __DIR__ . '/../Config/config.php';
    }
}
