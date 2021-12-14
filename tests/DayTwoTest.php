<?php

namespace Tests;

use AOC\DayTwo\DayTwo;
use PHPUnit\Framework\TestCase;

class DayTwoTest extends TestCase
{
    /** @test */
    function part_one()
    {
        $input = file_get_contents(__DIR__.'/fixtures/day_2.txt');

        $result = DayTwo::part_one($input);

        $this->assertEquals(150, $result);
    }
}