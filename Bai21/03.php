<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */


// cách 3
$courses = array("PHP", "Zend framework", "Joomla");
//$courses = array();
echo "<pre>";
print_r($courses);
echo "</pre>";
if (!empty($courses)){
    foreach ($courses as $key => $value){
        echo $value . "<br />";
    }
}
/*
            Array
            (
            [0] => PHP
            [1] => Zend framework
            [2] => Joomla
            )
*/
