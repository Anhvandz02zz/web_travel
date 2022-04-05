<?php  
 $servername = "localhost";
 $username ="root";
 $password="";
 $database = "web_travel";
  //Khai báo biến để kết nối đến CSDL
 $connect = mysqli_connect($servername, $username,$password,$database);
 if(!$connect){
  echo"Kết nối thất bại";
 }
 else{
  echo"";
 }