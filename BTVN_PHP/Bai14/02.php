<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>break-continue</title>
    <link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
    <?php

        for ($i = 0; $i <=10; $i++){
            if ($i == 3 || $i == 8) continue;
            echo $i . "<br />";

        }
    ?>


</body>
</html>