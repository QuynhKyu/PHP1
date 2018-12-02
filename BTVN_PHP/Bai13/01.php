<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>slide ảnh</title>
    <link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="content3">
    <h1> Slide ảnh </h1>
    <div class="image">
        <?php
            $i = 1;
            do{
                echo "<img src='Anh04.jpg'>";
                $flagshow = 0;
                if (isset($_GET["show"])){
                    $flagshow = $_GET['show'];
                    $i++;
                }

            }while($i<=4 && $flagshow == 1);
        ?>
        <a href="01.php?show=1">Show all</a>
    </div>

</div>
</body>
</html>