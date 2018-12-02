<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$score = array(2,3,5,1,3,5,7,2);
$length = count($score);
$max = max($score);
$min = min($score);
echo "<pre>";
print_r($score);
echo "</pre>";

$sum = array_sum($score);


echo "Trung bình : ". $sum / $length . "<br />";
echo "Tổng : ". $sum . "<br />";
echo "Max : ". $max . "<br />";
echo "Min : ". $min . "<br />";



