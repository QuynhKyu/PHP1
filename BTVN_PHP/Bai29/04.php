<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$array = array(2,4,6,8); // 4,6,8,12,16



function myFunction(&$value, $key, $paran = 2 ){
    $value =  $value * $paran;
}

array_walk($array, "myFunction", 2); // hàm gửi các giá trị của mảng đến 1 hàm nào đó để xử lý và nhận kết quả trả về là mảng mới

echo "<pre>";
print_r($array);
echo "</pre>";