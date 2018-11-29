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
if (!empty($courses)){
    for ($i = 0; $i < count($courses); $i++){
        echo $courses[$i]. "<br />";
    }
}
