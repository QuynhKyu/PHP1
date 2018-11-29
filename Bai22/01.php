<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */


// đếm số phần tử trong 1 mảng sd hàm courses
// cách 1
$courses = array();
$courses["php"] = "PHP";                // index php(key)
$courses["zend"] = "Zend framework";    // index zend
$courses["joomla"] = "Joomla";          // index joomla
$courses[] = "items 1";                 // key ; 0
$courses[] = "item 2";                  // key 1

echo "<pre>";
print_r($courses);
echo "</pre>";
 echo $courses["zend"];
