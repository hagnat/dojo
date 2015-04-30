<?php

namespace Hagnat\Dojo\Sum\Tests;

use Hagnat\Dojo\Sum\Integer;

class IntegerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param int $a
     * @param int $b
     * @param int $expected
     * @dataProvider dataForAddOperations
     */
    public function testAdd($a, $b, $expected)
    {
        $integer = new Integer($a);
        $result = $integer->add(new Integer($b));
        $this->assertEquals($expected, $result->getValue());
    }

    public function dataForAddOperations()
    {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 0, 1),
            array(1, 1, 2),
            array(1.5, 1.5, 2),
            array(-1, 3, 2),
            array(1, -3, -2),
        );
    }
}
