<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" href="style2.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
    $n1 = "";
    $n2 = "";
    $caculate = "";
    if (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["caculate"])){
         $n1 = $_POST["number1"];
          $n2 = $_POST["number2"];
        $caculate = $_POST["caculate"];
        $flag = true;
        if (is_numeric($n1) && is_numeric($n2)){
            switch ($caculate){
                case "+":
                    $result = $n1 + $n2;
                    break;
                case "-":
                    $result = $n1 - $n2;
                    break;
                case "*":
                    $result = $n1 * $n2;
                    break;
                case "/":
                    $result = $n1 / $n2;
                    break;
                default:
                    ;
                    break;
            }
        }else{
            $result = "Không thực hiện đc";
            $flag = false;
        }


    }
?>

<div class="content">
    <h1> Mô phỏng máy tính điên tử</h1>
    <form action="" method="post" name="main-form">
        <div class="row">
            <span>số thứ nhất</span>
            <input type="text" name="number1" value="<?php echo $n1;?>" />
        </div>
        <div class="row">
            <span>Phép toán</span>
            <input type="text" name="caculate" value="<?php echo $caculate;?>" />
        </div>
        <div class="row">
            <span>Số thứ hai</span>
            <input type="text" name="number2" value="<?php echo $n2;?>" />
        </div>
        <div class="row">

            <input type="submit" value="Xem kết quả" name="submit">
            <div class="row">
                <p><?php
                        if ($flag == true){
                            echo "Kết quả " . $n1 . " " . $caculate . " " . $n2 . " = " . $result;
                        }else{
                            echo $result;
                        }
                    ?>
                </p>
            </div>
    </form>
</div>
</body>
</html>