<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 19/11/2018
 * Time: 12:32 CH
 */

$number = -11;
$n = $number % 2;

$resultFirst = ($number >=0)? "Nguyên dương" : "Nguyên âm";
$resultLast = ($n == 0)? "chẵn" : "lẻ";
$result = $resultFirst . " " . $resultLast;
echo $result;