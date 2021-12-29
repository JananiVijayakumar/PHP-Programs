<?php
function search($arr, $x)
{
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] == $x)
            return $i;
    }
    return -1;
}

$arr = array(2, 56, 32, 5, 1, 7, 3, 90, 43);
$x = 43;

$result = search($arr, $x);
if ($result == -1)
    echo "Element is not present in array";
else
    echo "Element is present at index " . $result . " position";
