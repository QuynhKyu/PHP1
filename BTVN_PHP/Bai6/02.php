<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 19/11/2018
 * Time: 12:32 CH
 */

$number = 21;
if ($number % 2 == 0){
    $result =  "Số chẵn";
}else{
    $result =  "Số lẻ";
}

$result = ($number % 2 == 0) ? "Số chẵn" : "";
echo $result;