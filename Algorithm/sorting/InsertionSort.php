<?php

/**
 * Author: Janani Vijayakumar
 * Date : 28-12-2021
 * Desc : sort a array using Insertion sort
 */
class InsertionSort
{
    public static function insertionSort(&$arr, $n)
    {
        for ($i = 1; $i < $n; $i++) {
            $temp = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] > $temp) {
                $arr[$j + 1] = $arr[$j];
                $j = $j - 1;
            }

            $arr[$j + 1] = $temp;
        }
    }

    public function sortedArray(&$arr, $n)
    {
        for ($i = 0; $i < $n; $i++)
            echo $arr[$i] . " ";
        echo "\n";
    }
}
$insertion = new InsertionSort();
$arr = array(96, 4, 53, 21, 87, 72, 54);
$length = sizeof($arr);
echo "Before Sorting  ;\n";
$insertion->sortedArray($arr, $length);
$insertion->insertionSort($arr, $length);
echo "After Sorting :\n";
$insertion->sortedArray($arr, $length);
