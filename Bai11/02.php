<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>vẽ tam giác</title>
    <link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="content2">
    <h1> Vẽ tam giác </h1>
    <ul>

        <li><a href="02.php?type=1"><img src="imga/Anh04.jpg"></a></li>
        <li><a href="02.php?type=2"><img src="imga/Anh04.jpg"></a></li>
        <li><a href="02.php?type=3"><img src="imga/Anh04.jpg"></a></li>
    </ul>
    <div class="result">
        <?php

        $result = "";
        if (isset($_GET["type"])){
             $type = $_GET["type"];
             switch ($type){
                 case 1:
                     $i = 0;
                     $n = 6;
                     while ($i <= $n){
                         $i ++;
                         $result .= str_repeat("*", $i) . "<br />";
                     }
                 break;
             case 2:
                 $i = 6;
                 $n =6;
                 while ($i >= 1){
                     $i --;
                     $result .= str_repeat("*", $i) . "<br />";
                 }
                 break;
             case 3:
                 $i = 1;
                 $n =6;
                 while ($i <= $n){


                     $space = str_repeat("&nbsp;&nbsp;", $n - $i);
                     $character = str_repeat("*", 2*$i - 1);
                     $result .= $space . $character . "<br />";
                     $i ++;
                 }
                 break;
             }
        }
        echo $result;
        ?>
    </div>
</div>


</body>
</html>