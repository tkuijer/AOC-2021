<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use AOC\DayOne\DayOne;

class DayOneTest extends TestCase
{
    /** @test */
    public function PartOne()
    {
        $input = file_get_contents(__DIR__ . '/fixtures/day_1.txt');

        $result = DayOne::part_one($input);

        $this->assertEquals(7, $result);
    }
}
