<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$array = array("f" => "PHP", "d" => 80, "g" => 100);
echo "Input: ";
echo "<pre>";
print_r($array);
echo "</pre>";

ksort($array);// sắp xếp theo thứ tự tăng dần theo khóa
echo "Output: ";
echo "<pre>";
print_r($array);
echo "</pre>";