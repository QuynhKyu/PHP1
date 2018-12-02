<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$array = array("a", "b", "c", "d", "e");

$newArr = array_slice($array, 2); // c,d,e lấy từ vị trí thứ 2
$newArr1 = array_slice($array, 2, 2); // c,d,e lấy từ vị trí thứ 2 lấy thêm 2 phần tử

echo "<pre>";
print_r($newArr);
echo "</pre>";

echo "<pre>";
print_r($newArr1);
echo "</pre>";