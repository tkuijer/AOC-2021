<?php

namespace AOC\DayTwo;

class DayTwo
{

    public static function part_one($input)
    {
        $lines = explode(PHP_EOL, $input);
        $lines = array_map('trim', $lines);

        $horizontal = 0;
        $depth = 0;

        foreach($lines as $line) {
            $parts = explode(" ", $line);

            $direction = $parts[0];
            $distance = (int) $parts[1];

            switch ($direction) {
                case 'up':
                    $depth -= $distance;
                    break;
                case 'down':
                    $depth += $distance;
                    break;
                case 'forward':
                    $horizontal += $distance;
                    break;
            }
        }

        return $horizontal * $depth;
    }

    public static function part_two($input)
    {
        $lines = explode(PHP_EOL, $input);
        $lines = array_map('trim', $lines);

        $horizontal = 0;
        $depth = 0;
        $aim = 0;

        foreach($lines as $line) {
            $parts = explode(" ", $line);

            $direction = $parts[0];
            $distance = (int) $parts[1];

            switch ($direction) {
                case 'up':
                    $aim -= $distance;
                    break;
                case 'down':
                    $aim += $distance;
                    break;
                case 'forward':
                    $horizontal += $distance;
                    $depth += $aim * $distance;
                    break;
            }
        }

        return $horizontal * $depth;
    }
}