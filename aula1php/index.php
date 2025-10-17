<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $v1 = 30;
   $v2 = 15;
   echo "Quanto é 30 + 15? <br>";
   $total = $v1 + $v2;
   echo "O total é:".$total."<br>";
   
   echo " Quanto é 30 - 15? <br>";
   $total = $v1 - $v2;
   echo "O total é:".$total."<br>";
   
   echo "Quanto é 30 * 15? <br>";
   $total = $v1 * $v2;
   echo "O total é:" .$total."<br>";
   
   echo "Quanto é 30 / 15? <br>";
   $total = $v1 / $v2;
   echo "O total é:" .$total."<br>";
   

   if ($v1 / $v2 == 2) {
   echo "O resultado da divisão é exatamente 2";
   }
   elseif ($v1 / $v2 > 2) {
   echo "O resultado da divisão é maior que 2";
   }
   else{
   echo "O resultado da divisão é menor que 2";
   }
?> 
</body>
</html>