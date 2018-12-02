<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$array1= array("name" => "PHP", "time" => 120, "zend", "joomla");
$array2 = array("PHP", 100);
$diff = array_diff($array1,$array2); // so sánh sự khác nhau giữa 2 mảng, tồn ại trong mảng 1 nhưng k tồn tại trong 2

echo "<pre>";
print_r($array1);
echo "</pre>";

echo "<pre>";
print_r($array2);
echo "</pre>";

echo "<pre>";
print_r($diff);
echo "</pre>";