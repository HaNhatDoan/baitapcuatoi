<?php
   $sever='localhost';
   $user='root';
   $pass='';
   $database='testchitietsanpham';
   //kết nối database
   $conn=new mysqli($sever,$user,$pass,$database);
   //Kiểm trá xem database có kết nối thành công không
   if($conn){
        mysqli_query($conn,"SET NAMES 'utf8'");
   }
   else{
        echo "Kết nối không thành công";
   }
?>