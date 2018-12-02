<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$array1 = array("a", "b", "c");
$array3 = array("PHP", "Joomla", "zend framework");
$array2 = array(2,4,6);

$newArray = array_merge($array1, $array2, $array3); // hàm nối mảng

echo "<pre>";
print_r($newArray);
echo "</pre>";



