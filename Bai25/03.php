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

echo $length = array_push($course, "HTML", "CSS");// thêm 1 hoặc nhiều  phàn tử vào cuối mảng.. hàm trả về kiểu số nguyên
echo "<pre>";
print_r($course);
echo "</pre>";



