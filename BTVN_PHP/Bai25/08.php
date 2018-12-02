<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$score = array(2,2,3,5,1,3,5,7,2);

$newArr = array_count_values($score);// đếm số phần tử trong mảng xuất hiện mấy lần
echo "<pre>";
print_r($score);
echo "</pre>";

echo "<pre>";
print_r($newArr);
echo "</pre>";








