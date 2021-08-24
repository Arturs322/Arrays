<?php

//todo check if an array contains a value user entered

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

while (true)
{
    $numbers = (int) readline('Enter the value to search for: ');
    switch ($numbers)
    {
        case 1789:
            echo "This value is in the array" . PHP_EOL;
            break;
        case 2035:
            echo "This value is in the array" . PHP_EOL;
            break;
        case  1899:
            echo "This value is in the array" . PHP_EOL;
            break;
        case  1456:
            echo "This value is in the array" . PHP_EOL;
            break;
        case  2013:
            echo "This value is in the array" . PHP_EOL;
            break;
        case  1458:
            echo "This value is in the array" . PHP_EOL;
            break;
        case  2458:
            echo "This value is in the array" . PHP_EOL;
            break;
        case  1254:
            echo "This value is in the array" . PHP_EOL;
            break;
        case  1472:
            echo "This value is in the array" . PHP_EOL;
            break;
        case  2365:
            echo "This value is in the array" . PHP_EOL;
            break;
        case  2265:
            echo "This value is in the array" . PHP_EOL;
            break;
        case  1457:
            echo "This value is in the array" . PHP_EOL;
            break;
        case  2456:
            echo "This value is in the array" . PHP_EOL;
            break;
        default:
            echo "This value is not in the array" . PHP_EOL;
            exit;

    }
}







