<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("PHP", "Joomla", "Zend Framework", "Jquery");

echo "<pre>";
print_r($course);
echo "</pre>";

 echo $firstItems = array_shift($course); // xóa phần tử đầu tiên

echo "<pre>";
print_r($course);
echo "</pre>";



