<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$array = array("name" => "PHP", "time" => 120, "zend", "joomla");



function myFunction($value,$key, $paran ){
    echo $key . "$paran" .$value . "<br />";
}

array_walk($array, "myFunction", " - "); // hàm gửi các giá trị của mảng đến 1 hàm nào đó để xử lý và nhận kết quả trả về là mảng mới