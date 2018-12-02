<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$key = array("name", "time", "total");
$value = array("PHP", 100, 2000);

$newArr = array_combine($key,$value); // tạo ra mảng mới đước lấy từ mảng ksy và giá trị được lấy từ mảng value

echo "<pre>";
print_r($newArr);
echo "</pre>";