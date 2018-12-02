<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */


// đếm số phần tử trong 1 mảng sd hàm courses


$courses = array("php" => "PHP", "zend" => "Zend framework", "joomla" => "Joomla", 0 => "items 1", 1 => "item 2");
//$courses = array();
echo "<pre>";
print_r($courses);
echo "</pre>";

if (!empty($courses)){
    foreach ($courses as $key => $value){
        echo $key . " : " . $value . "<br />";
    }
}

/*
                Array
        (
            [php] => PHP
            [zend] => Zend framework
            [joomla] => Joomla
            [0] => items 1
            [1] => item 2
        )
*/