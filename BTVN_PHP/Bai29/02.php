<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$array = array("name" => "PHP", "time" => 120, "zend", "joomla");



function myFunction($value,$key ){
    echo $key . " : " .$value . "<br />";
}

array_walk($array, "myFunction");