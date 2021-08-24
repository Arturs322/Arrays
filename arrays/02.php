<?php

//todo calculate an average value of the numbers

$numbers = [20, 30, 25, 35, -16, 60, -100];

function averageValue ($numbers)
{
    return array_sum($numbers) / count($numbers);
}
echo averageValue($numbers) . PHP_EOL;
