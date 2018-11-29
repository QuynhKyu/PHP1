<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("PHP", "Joomla", "Zend Framework");

echo "<pre>";
print_r($course);
echo "</pre>";

$newArr = array_reverse($course);// đảo ngược vị trí của phần tử từ cuối lên đầu, từ đầu xuống cuối
echo "<pre>";
print_r($newArr);
echo "</pre>";



