<?php

    $userName = $_REQUEST["login"] . "<br />";
    echo $userName;
    $password= $_REQUEST["password"] . "<br />";
    echo $password;
    $result = ($userName == "admin" && $password == "12345")? "Đăng nhập thành công" : "Đăng nhập thất bại";
    echo $result;