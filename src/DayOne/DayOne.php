<?php

namespace AOC\DayOne;

class DayOne
{
    public static function part_one($input)
    {
        $lines = explode(PHP_EOL, $input);
        $lines = array_map('trim', $lines);

        $larger = 0;
        $last = (int)array_shift($lines);
        while ($line = (int)array_shift($lines)) {
            if($line > $last) {
                $larger++;
            }
            $last = $line;
        }

        return $larger;
    }

    public static function part_two($input)
    {
        $lines = explode(PHP_EOL, $input);
        $lines = array_map('trim', $lines);

        $larger = 0;
        $last = PHP_INT_MAX;
        for($i = 0; $i <= count($lines) - 3; $i++) {
            $current = $lines[$i] + $lines[$i + 1] + $lines[$i + 2];

            if($current > $last) {
                $larger++;
            }

            $last = $current;

        }

        return $larger;
    }
}