<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$php = "PHP";
$zend = "Zend framework";
$joomla = "Joomla";

// đếm số phần tử trong 1 mảng sd hàm courses
// cách 1
$courses = array();
$courses[] = "PHP";
$courses[] = "Zend framework";
$courses[] = "Joomla";

// cách 2
$courses = array();
$courses[0] = "PHP";
$courses[1] = "Zend framework";
$courses[2] = "Joomla";

// cách 3
$courses = array("PHP", "Zend framework", "Joomla");
echo $courses[1];