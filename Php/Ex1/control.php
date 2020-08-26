<?php
function swap(&$a, &$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}

function bubbleSort(&$arr, $selection)
{
    $n = sizeof($arr);

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($selection == 1)
            {
                if ($arr[$j] > $arr[$j + 1]) {
                    swap($arr[$j], $arr[$j+1]);
                }

            }
            else if ($selection == -1)
            {
                if ($arr[$j] < $arr[$j + 1]) {
                    swap($arr[$j], $arr[$j+1]);
                }
            }
            else {
                echo "Invalid Selection";
            }
        }
    }
}

function findItemInArray($arr, $x)
{
    foreach ($arr as $value) {
        if ($value == $x)
        {
            return true;
        }
    }
    return false;
}

function replaceItemInArray(&$arr, $findValue, $replaceValue)
{
    foreach ($arr as $key => $value) {
        if ($value == $findValue) {
            $arr[$key] = $replaceValue;
        }
    }
}

function removeItemInArray(&$arr, $removeValue)
{
    foreach ($arr as $key => $value) {
        if ($value == $removeValue) {
            unset($arr[$key]);
        }
    }
    \array_values($arr);
}