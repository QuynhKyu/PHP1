<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>break-continue</title>
    <link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
   <div class="content4">
       <h1>Giải câu đố bằng vòng lặp</h1>
        <div class="question">
            <p>yêu nhau cau sáu bổ ba</p>
            <p>ghét nhau cáu sáu bổ ra làm mười</p>
            <p>mỗi người một miếng trăm người</p>
            <p>có mười bảy quả hỏi người ghét yêu</p>
            <p>hỏi có bao nhiêu người yêu nhau, ghét nhau?</p>

        </div>

       <div class="answer">
           <p>Đáp án</p>
           <ul>
               <?php
                    // x,y
                    // 3x + 10y = 100
                    // x + y = 17
                    // x = 1 y chạy
               for($x=1; $x<=30; $x++){
                   for($y=1; $y<=9; $y++){
                        if (3*$x + 10*$y == 100){
                            echo "<li>$x người yêu nhau, $y người ghét nhau</li>";
                        }
                   }
               }
               ?>
           </ul>
       </div>
   </div>


</body>
</html>