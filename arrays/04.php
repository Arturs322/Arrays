<?php

$numbers = [];

for ($i = 0; $i < 10; $i++)
{
    $numbers[] = rand(1, 100);
}

$secondListOfNumbers = array_merge($numbers);

array_pop($numbers);
array_push($numbers,-7);

echo "First array: " . PHP_EOL;
foreach ($numbers as $number)
{
    echo "$number ";
}
echo PHP_EOL;

echo "Second array: " . PHP_EOL;
foreach ($secondListOfNumbers as $number)
{
    echo "$number ";
}
echo PHP_EOL;