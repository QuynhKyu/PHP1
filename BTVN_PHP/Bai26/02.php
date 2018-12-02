<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("php" => "PHP", "jl" => "Joomla", "zend" => "zend framework");


$keyArray = array_rand($course, 2); // hàm lấy ra giá trị của key ngẫu nhiên trong mảng

echo "<pre>";
print_r($course);
echo "</pre>";

echo "<pre>";
print_r($keyArray);
echo "</pre>";



