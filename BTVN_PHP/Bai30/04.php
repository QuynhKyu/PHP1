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

$newArray = array_splice($array, 2, 1, array(7,8)); // từ vị trí t2 loại bỏ đi 1 phần tử sau đó thêm 2 phần tử nữa vào
echo "NewArray: ";
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "Output: ";
echo "<pre>";
print_r($array);
echo "</pre>";