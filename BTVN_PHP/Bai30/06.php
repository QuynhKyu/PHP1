<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$array = array(1,3,2,14,29,23);
echo "Input: ";
echo "<pre>";
print_r($array);
echo "</pre>";

rsort($array);// sắp xếp theo thứ tự giảm dần theo giá trị
echo "Output: ";
echo "<pre>";
print_r($array);
echo "</pre>";