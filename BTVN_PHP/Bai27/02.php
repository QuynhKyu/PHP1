<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("name" => "PHP", "time" => 80, 100);

echo "<pre>";
print_r($course);
echo "</pre>";

$result = serialize($course); // chuyển đổi mảng về 1 chuỗi đặc biệt
echo $result;

