<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 28/11/2018
 * Time: 1:30 CH
 */
$php = "PHP";
$zend = "Zend framework";
$joomla = "Joomla";

// đếm số phần tử trong 1 mảng sd hàm courses
$courses = array();
//$courses[] = "PHP";
//$courses[] = "Zend framework";
//$courses[] = "Joomla";

$length = count($courses);
echo $length;
// c1: length
if ($length > 0){
    echo "Không phải là mảng rỗng";
}else{
    echo "Mảng rỗng";
}

// c2: emty
if (!empty($courses)){
    echo "Không phải là mảng rỗng";
}else{
    echo "Mảng rỗng";
}