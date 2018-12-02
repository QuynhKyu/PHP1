<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("php" => "PHP", "jl" => "Joomla", "zend" => "zend framework");


$key1 = array_search("Joomla", $course); // tìm kiếm phần từ trong mảng

echo "<pre>";
print_r($course);
echo "</pre>";

echo "<pre>";
print_r($key1);
echo "</pre>";



