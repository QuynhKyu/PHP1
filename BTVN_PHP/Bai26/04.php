<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("php" => "PHP", "jl" => "Joomla", "zend" => "zend framework");

// kiểm tra 1 key có tồn tại trong mảng hay k?
if (array_key_exists("php", $course)){
    echo "Exists";
}
//kiểm tra 1 value có tồn tại trong mảng hay k?
if (in_array("PHP", $course)){
   echo "Exists";
}





