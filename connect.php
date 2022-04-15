<?php  
 $servername = "3.132.234.157";
 $username ="anhvan";  
 $password="123@123a";
 $database = "web_travel";
  //Khai báo biến để kết nối đến CSDL
 $connect = mysqli_connect($servername, $username,$password,$database);
 if(!$connect){
  echo"Kết nối thất bại";
 }
 else{
  echo"";
 }
