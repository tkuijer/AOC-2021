<?php

namespace Tests;

use AOC\DayThree\DayThree;
use PHPUnit\Framework\TestCase;

class DayThreeTest extends TestCase
{
    /** @test */
    function part_one()
    {
        $input = file_get_contents(__DIR__.'/fixtures/day_3.txt');

        $result = DayThree::part_one($input);

        $this->assertEquals(198, $result);
    }
}