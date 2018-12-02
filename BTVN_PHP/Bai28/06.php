<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$array1= array("name" => "PHP", "time" => 120, "zend", "joomla");
$array2 = array("PHP","time" => 120);
$diff = array_intersect_assoc($array1,$array2); // lấy những phần tử có key và value tồn tại trong mảng 1 và tồn tại trong 2

echo "<pre>";
print_r($array1);
echo "</pre>";

echo "<pre>";
print_r($array2);
echo "</pre>";

echo "<pre>";
print_r($diff);
echo "</pre>";