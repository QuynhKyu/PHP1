<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */


// quản lý các thông tin của sinh viên
// sv1: ten, gt, số điểm

$student = array(
                    "SV001" => array("name" => "John",
                                      "sex" => 1,
                                       "score" => array(4,5,6)
                                     ),

                    "SV002" => array("name" => "Peter",
                                      "sex" => 1,
                                      "score" => array(5,5,7)
                                     ),

                    "SV003" => array("name" => "Marry",
                                     "sex" => 2,
                                     "score" => array(7,8,9)
                                    )
                 );
echo "<pre>";
print_r($student);
echo "</pre>";

// tên của sv có msx số SV002
echo $student["SV002"]["name"]. "<br />";
// cho biết điểm môn t2 của SV003
echo $student["SV003"]["score"][1] ."<br />";
// thay đổi tên của SV003 => Anne
echo $student["SV003"]["name"] = "Anne";
echo "<pre>";
print_r($student);
echo "</pre>";

// thay đổi điểm của SV003 môn t2 thành 10
echo $student["SV003"]["score"][1] = 10;
echo "<pre>";
print_r($student);
echo "</pre>";
