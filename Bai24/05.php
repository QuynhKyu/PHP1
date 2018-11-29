<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("PHP", "Joomla", "Zend Framework", "Jquery");


function removeItems(&$array, $type = "first" , $total = 2){
    $result = array();
    if (!empty($array)){
        if ($total >= count($array)){
            $result = $array;
            $array = null;
        }else{
            if ($type == "first"){
                for ($i = 1; $i <= $total; $i ++){
                    $result[] = array_shift($array);
                }
            }elseif ($type == "last"){
                for ($i = 1; $i <= $total; $i ++){
                    $result[] = array_pop($array);
                }
            }
        }

    }
    return $result;
}
echo "<pre>";
print_r($course);
echo "</pre>";


$arrTemp = removeItems($course, "first", 20);
echo "arrTemp: <br />";
echo "<pre>";
print_r($arrTemp);
echo "</pre>";


echo "course: <br />";
echo "<pre>";
print_r($course);
echo "</pre>";

