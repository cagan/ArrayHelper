<?php


use ArrayHelper\ArrayHelper;
use PHPUnit\Framework\TestCase;

class ArrayHelperTest extends TestCase
{

    /** @test */
    public function it_should_merge_arrays_properly()
    {
        $arr1 = ['1', '12', '7'];
        $arr2 = ['6', '16', '8'];

        $this->assertEquals(
            ['1', '12', '7', '6', '16', '8'],
            ArrayHelper::merge($arr1, $arr2)
        );
    }
}