<html>
<head>
    <title>Tính BMI</title>
    <style type="text/css">
        .content  {
            border: 2px solid black;
            width: 500px;
            margin: 20px auto;
            padding: 10px;
        }
        .content div p {
            font-size: 20px;
            font-weight: bold;
        }

    </style>
</head>
<body>
<div class="content">
    <?php
    $chieucao = 0;
    if(isset($_POST["chieucao"]) && is_numeric($_POST["chieucao"]) && $_POST["chieucao"] > 0) {
        $chieucao=$_POST["chieucao"];
    }
    $cannang = 0;
    if(isset($_POST["cannang"]) && is_numeric($_POST["cannang"]) && $_POST["cannang"] > 0 ) {
        $cannang=$_POST["cannang"];
    }
    ?>
    <form action="" method="post">
        <div class="chieucao">
            <p>Chiều cao (M):</p>
            <input type="text" name="chieucao" value="<?php echo $chieucao;?>" placeholder="Nhập chiều cao theo đơn vị mét">
        </div>

        <div class="cannang">
            <p>Chiều cao (M):</p>
            <input type="text" name="cannang" value="<?php echo $cannang;?>" placeholder="Nhập cân nặng theo đơn vị kilogram">
        </div>

        <div>
            <p>Chỉ số khối cơ thể</p>

        </div>
        <input type="submit" name="BMI" value="Tính BMI">
    </form>
   <?php
   if($chieucao && $cannang){
       $kq = $cannang/($chieucao*$chieucao);
       $kq = round($kq, 3);
       if ($kq < 18.5){
           echo "Gầy, nguy cơ phát triển bệnh thấp";
       }
       elseif ($kq > 18.5 && $kq < 24.9){
           echo "Bình thường, nguy cơ phát triển bệnh trung bình";
       }
       elseif ($kq > 25.0 && $kq < 29.9){
           echo "Hơi béo, nguy cơ phát triển bệnh cao";
       }
       elseif ($kq > 30.0 && $kq < 34.9){
           echo "Béo phì cấp độ 1 , nguy cơ phát triển bệnh cao";
       }
       elseif ($kq > 35.0 && $kq < 39.9){
           echo "Béo phì cấp độ 2, nguy cơ phát triển bệnh rất cao";
       }
       elseif($kq >=40.0){
           echo "Béo phì cấp độ 3, nguy cơ phát triển bệnh nguy hiểm";
       }
       else{
           echo "Không xác định được";
       }
   }else{
       $message = 'Hãy nhập lại dữ liệu. Dữ liệu bạn nhập không đúng chiều cao và cân nặng phải là một số';
   }
   echo "<br />";
   echo "Kết quả: " .$kq. "<br />";
   ?>

</div>
</body>

</html>