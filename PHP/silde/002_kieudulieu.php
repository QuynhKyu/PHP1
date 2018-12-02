<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 30/11/2018
 * Time: 7:22 CH
 */
// 1 số nguyên
$int = 1;

// 2 số thực
$float = 3.15;

// 3 chuỗi
$string = "nguyen van a";

// 4 boolean
$boolean1 = true;
$boolean1 = false;

// 5 dạng mảng
$array_string = array(
    "nguyen van a",
    "nguyen van b",
    "nguyen van c"
);
$array_age = array(
    21,20,19
);

// dạng mảng chứa các phần tử hỗn hợp
// mảng chứa các phần tử phân tách nhau bằng,

$array_misc = array('nguyen van a', 19, 'nguyen van b', 22, true, 3.15,$array_string, $array_age );

// 6 php object
class student{
    // khai báo các thuộc tính
    public $name;
    public $age;
    public $location;

    // hàm khởi tạo của claaa
    public function _construct($name, $age, $location){
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }
}

// khởi tạo 1 đối tượng trong php
$tuan_anh = new student('nguyen tuan anh', 21, 'ha noi');

// khởi tạo 1 đối tượng trong php

$huong = new student('nguyen diem huong', 22, 'thai nguyen');

// 7 NULL
$null = null;

// 8 resource

// in ra 1 biến
echo '<br /> biến số nguyên ' .$int;
echo '<br /> biến số thực ' .$float;
echo '<br /> biến dạng chuỗi ' .$string;


// in ra mảng bằng print_r
echo '<br /> biến số nguyên ' .print_r($int, true);
echo '<br /> biến số thực ' .print_r($float, true);
echo '<br /> biến dạng chuỗi ' .print_r($string, true);
echo '<br /> biến dạng mảng ' .print_r($array_misc);
echo '<br /> biến dạng object ' .print_r($tuan_anh);

echo "<pre>";
print_r($array_misc);
echo "</pre>";

echo "<pre>";
print_r($tuan_anh);
echo "</pre>";

// lệnh debug lỗi
echo '<br /> var_dump()';
var_dump($int);
echo '<br /> var_dump()';
var_dump($float);
echo '<br /> var_dump()';
var_dump($string);
echo '<br /> var_dump()';
var_dump($boolean1);
echo '<br /> var_dump()';
var_dump($null);
echo '<br /> var_dump()';
var_dump($array_misc);
echo '<br /> var_dump()';
var_dump($tuan_anh);
die; exit();