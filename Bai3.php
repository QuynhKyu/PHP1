<?php
        $x = 10;
       /* --$x; // giảm đi 1 đơn vị sau đó trả về giá trị của $x*/
        $y = ++$x; // trả về giá trị $x sau đó tăng lên 1 đơn vị
        echo "Y: " . $y . "<br />" ;//11
        echo  "X: " .$x;//11

        echo "<br />";
        // toán tử  so sánh
        $x1 = 10;// là kiểu số
        $y1 = 8;
        echo ($x1 > $y1);// hiển thị ra 1
        echo ($x1 < $y1);// hiển thị rỗng
        echo "<br />";
        echo ($x1 != $y1); // hiển thị 1 x khác 1
        echo "<br />";
        $x2 = "10";// x2 là kiểu string
        echo ($x1 === $x2);// so sánh cả kiểu dữ liễu của x1 và x2

        // toán tử logic
            echo "<br />";
            $x1 = 10;// là kiểu số
            $y1 = 8;
            echo ($x1 >1 && $y <5);// trả về gtri rỗng vì sai

        // toán tử điều kiện
        echo "<br />";
        $var = "PHP training";
        $result = (is_string($var) == 1)? "Chuỗi" : "Không là chuỗi";
        echo ($result);

        echo "<br />";
        $n= 0;
        $result = ($n >0)?"Số dương" : (($n <0)? "Số âm" : "Số 0");
        echo ($result);

