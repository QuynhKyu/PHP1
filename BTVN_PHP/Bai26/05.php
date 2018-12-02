<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("pHp" => "PHP", "jl" => "Joomla", "zend" => "zend framework");

$newArr = array_change_key_case($course, CASE_UPPER); // chuyển đổi chữ thường thành chữ hoa

echo "<pre>";
print_r($course);
echo "</pre>";

echo "<pre>";
print_r($newArr);
echo "</pre>";




