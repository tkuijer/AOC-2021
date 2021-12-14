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
}