<?php
    function pow2(&$n1, &$n2){ // truyền theo kiểu tham chiếu
        $result = 0;
        // n1 * n1 + n2 * n2
        $n1 = $n1 * $n1;
        $n2 = $n2 * $n2;
        $result = $n1 + $n2;
        return $result;
    }
    $n1 = 2;
    $n2 = 4;
    $number = pow2($n1, $n2); // truyền theo kiểu tham trị
    echo  "Number: " .$number . "<br />";
    echo  "n1: " .$n1 . "<br />";
    echo  "n2: " .$n2 . "<br />";
?>