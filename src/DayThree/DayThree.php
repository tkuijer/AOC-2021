<?php

namespace AOC\DayThree;

class DayThree
{
    public static function part_one($input)
    {
        $input = explode(PHP_EOL, $input);
        $input = array_map('trim', $input);
        $input = array_map('str_split', $input);

        $length = count($input[0]);

        $gamma = [];
        $epsilon = [];

        for ($i = 0; $i < $length; $i++) {
            $ones = 0;
            foreach($input as $item) {
                $ones += $item[$i];
            }

            if($ones > count($input) / 2) {
                $gamma[] = 1;
                $epsilon[] = 0;
            } else {
                $gamma[] = 0;
                $epsilon[] = 1;
            }
        }

        $gamma = implode("", $gamma);
        $epsilon = implode("", $epsilon);

        $gamma = bindec($gamma);
        $epsilon = bindec($epsilon);

        return $gamma * $epsilon;
    }
}