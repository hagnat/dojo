<?php

namespace Hagnat\Dojo\Sum\Tests;

use Hagnat\Dojo\Sum\Sum;

class SumTest extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
       $this->object = new Sum();
    }

    public function testOnePlusOne()
    {
       $this->assertEquals(2, $this->object->sum(1,1));
    }
}
