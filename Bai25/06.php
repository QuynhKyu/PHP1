<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("php" => "PHP", "joomla" => "Joomla", "zend" => "Zend Framework");

echo "<pre>";
print_r($course);
echo "</pre>";

$newArr = array_flip($course);// đổi vị trí key => value và ngược lại
echo "<pre>";
print_r($newArr);
echo "</pre>";



