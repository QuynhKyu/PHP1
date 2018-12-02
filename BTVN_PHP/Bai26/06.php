<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("PHP", "Joomla", "Zend");

$str = Implode("--",$course); // chuyển đổi từ mảng sang chuỗi

$fullName = "Nguyen Van A";
$array = explode(" ", $fullName);// chuyển đổi từ chuỗi sang mảng
echo "<pre>";
print_r($array);
echo "</pre>";




