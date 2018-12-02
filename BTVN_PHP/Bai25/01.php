<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("PHP", "Joomla", "Zend Framework", "Jquery", "PHP", "Joomla");

echo "<pre>";
print_r($course);
echo "</pre>";

$newArr = array_unique($course); // loại bỏ các phần tử trùng nhau trong mảng
echo "<pre>";
print_r($newArr);
echo "</pre>";



