<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 19/11/2018
 * Time: 12:32 CH
 */

$number = 20;
if ($number % 2 == 0){
    echo "Số dương";
}

$result = ($number % 2 == 0) ? "Số chẵn" : "";
echo $result;