<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 19/11/2018
 * Time: 12:32 CH
 */

$number = 10;
if ($number >= 0 && $number % 2 == 0 ){
    $result =  "nguyên dương chẵn";
}else if($number >= 0 && $number % 2 == 1 ){
    $result =  "nguyên dương lẻ";
}else if($number < 0 && $number % 2 == 0 ){
    $result =  "nguyên âm chẵn";
}else{
    $result =  "nguyên âm lẻ";
}

echo $result;