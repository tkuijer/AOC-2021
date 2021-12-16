<?php

require __DIR__ . '/vendor/autoload.php';

use AOC\DayOne\DayOne;
use AOC\DayTwo\DayTwo;
use AOC\DayThree\DayThree;

echo "Day 1:" . PHP_EOL;
$input = file_get_contents(__DIR__ . '/input/day_1.txt');

echo "Part 1: " . DayOne::part_one($input) . PHP_EOL;
echo "Part 2: " . DayOne::part_two($input) . PHP_EOL;

echo "------------------" . PHP_EOL;
echo "Day 2:" . PHP_EOL;
$input = file_get_contents(__DIR__ . '/input/day_2.txt');

echo "Part 1: " . DayTwo::part_one($input) . PHP_EOL;
echo "Part 2: " . DayTwo::part_two($input) . PHP_EOL;

echo "------------------" . PHP_EOL;
echo "Day 3:" . PHP_EOL;
$input = file_get_contents(__DIR__ . '/input/day_3.txt');

echo "Part 1: " . DayThree::part_one($input) . PHP_EOL;