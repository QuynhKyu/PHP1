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

 $length = array_unshift($course, "HTML", "CSS");// thêm 1 hoặc nhiều  phàn tử vào đầu mảng.. hàm trả về kiểu số nguyên
echo "<pre>";
print_r($course);
echo "</pre>";



