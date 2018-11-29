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
    function createBox($content, $width = 150, $height = 50){
        $result =  '<div style="width: '.$width.'; height: '.$height.'">';
        $result .= '<p>'.$content.'<span>(200x50)</span></p>';
        $result .= '</div>';
        return $result;
    }
    $BoxA = createBox("BoxA", 500 , 100);
    $BoxB = createBox("BoxB");
    echo $BoxA . $BoxB;
    ?>



</div>
</body>
</html>