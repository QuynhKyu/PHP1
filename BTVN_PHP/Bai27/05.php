<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$name = "PHP";
$time = 100;
$array = compact("name", "time");// tạo ra mảng từ các biến có sẵn

echo "<pre>";
print_r($array);
echo "</pre>";