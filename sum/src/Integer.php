<?php

namespace Hagnat\Dojo\Sum;


class Integer implements Number
{
    /** @var  int */
    private $integer;

    function __construct($integer)
    {
        $this->integer = (int) $integer;
    }
    
    public function getValue()
    {
        return $this->integer;
    }

    public function add(Number $number)
    {
        $result = $this->getValue() + $number->getValue();
        return new Integer($result);
    }
}
