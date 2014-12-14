<?php

namespace Hagnat\Dojo\Sum\Tests;

use Hagnat\Dojo\Sum\MathematicalOperator;

class MathematicalOperatorTest extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
       $this->operator = new MathematicalOperator();
    }

    public function testOnePlusOne()
    {
       $this->assertEquals(2, $this->operator->add(1,1));
    }
}
