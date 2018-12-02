<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */

$result = 'a:3:{s:4:"name";s:3:"PHP";s:4:"time";i:80;i:0;i:100;}';
$array = unserialize($result); // chuyển đổi từ 1 chuỗi đặc biệt được tạo từ serialize về trạng thái ban đầu
echo "<pre>";
print_r($array);
echo "</pre>";
