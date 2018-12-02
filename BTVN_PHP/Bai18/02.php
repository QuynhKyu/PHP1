<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">
    <?php
    $value = "ABC";
    function createBox($content, $width = 150, $height = 50){
        $result =  '<div style="width: '.$width.'; height: '.$height.'">';
        $result .= '<p>'.$content.'<span>(200x50)</span></p>';
        $result .= '</div>';
        // cách 1
        //global $value;
       // echo  $value . "<br />";

        // cách 2
        echo $GLOBALS["value"];// truy cập biến toàn cục
        return $result;
    }
        $BoxA = createBox("BoxA");
         echo  $BoxA;

    ?>



</div>
</body>
</html>