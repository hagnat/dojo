<?php

namespace Hagnat\Dojo\Sum;


interface Number
{
    public function getValue();

    public function add(Number $number);
}