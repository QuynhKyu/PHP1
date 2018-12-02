<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$array = array("a", "b", "c", "d", "e");

echo "Input: ";
echo "<pre>";
print_r($array);
echo "</pre>";

$newArray = array_splice($array, 2); // loại bỏ từ vị trí thứ 2
echo "NewArray: ";
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "Output: ";
echo "<pre>";
print_r($array);
echo "</pre>";