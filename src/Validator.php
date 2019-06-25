<?php

namespace Sunxyw\Validation;

use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory;

class Validator
{
    protected $factory;

    public function __construct(Translator $translator)
    {
        $this->factory = new Factory($translator);
    }

    public function getInstance()
    {
        return $this->factory;
    }
}