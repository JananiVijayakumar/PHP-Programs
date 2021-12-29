<?php

/**
 * Author: Janani Vijayakumar
 * Date : 28-12-2021
 * Desc : sort a array using Bubble sort
 */
class BubbleSort
{
    public function bubbleSort(&$arr)
    {
        $len = count($arr);
        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $len - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
    }
    public function sortedArray($arr, $n)
    {
        for ($i = 0; $i < $n; $i++)
            echo $arr[$i] . " ";
        echo "\n";
    }
}
$bubble = new BubbleSort();
$arr = array(55, 45, 98, 56, 32, 12, 65, 92, 22);
$len = count($arr);
echo "Before Sorting :\n";
$bubble->sortedArray($arr, $len);
$bubble->bubbleSort($arr);
echo "After Sorting :\n";
$bubble->sortedArray($arr, $len);
