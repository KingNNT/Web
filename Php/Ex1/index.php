<?php
require_once('./control.php');
$arr = array(5, 6, 3, 4, 1, 2);
$max = arr[0];
foreach ($arr as $value) {
    if ($max < $value)
    {
        $max = $value;
    }
}
echo "Max = " . $max . "<br/>";
$min = arr[0];
foreach ($arr as $value) {
    if ($min > $value) {
        $min = $value;
    }
}
echo "Min = " . $min . "<br />";

bubbleSort($arr, 1);
echo "After sort: ";
print_r($arr);
echo "<br />";
bubbleSort($arr,-1);
echo "After reverse sort: ";
print_r($arr);
echo "<br />";
$x = 4;
if (findItemInArray($arr, $x))
{
    echo "Found <br/>";
}
else {
    echo "Not found <br/>";
}
$findValue = 4;
$replaceValue = 100;
replaceItemInArray($arr, $findValue, $replaceValue);
print_r($arr);

$removeValue = 100;
removeItemInArray($arr, $removeValue);
echo "<br />After Remove: ";
print_r($arr);