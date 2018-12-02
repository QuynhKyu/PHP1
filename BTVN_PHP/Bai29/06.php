<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$array1 = array(2,3,1);
$array2 = array(7,8,9);


function myFunction($n1, $n2){
    $result = $n1 * $n2;
    return $result;
}
$newArr = array_map("myFunction", $array1,$array2 );


echo "<pre>";
print_r($newArr);
echo "</pre>";
