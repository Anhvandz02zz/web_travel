<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>kaka</title>
    <style type="text/css">
       .container{
        padding: 20px;
        background-color: mediumseagreen;
        width: 400px;
        height: 500px;
        margin-top: 40px;
        text-align: center;
        margin-left: 35%;
        
    }
    body{
        text-align: center;
        background-color:  #50c7c7;
    }
     .ip1 input{
       border: 1px solid silver;
        height: 30px;
     }
     .ip2 input{
        border: 1px solid silver;
        height: 30px;
     }
     .ip3 input{
        border: 1px solid silver;
        height: 30px;
        width: 40%;
        outline: none;
        font-size: 19px;
        background-color:Moccasin #FFE4B5;
     }
     

    </style>
</head>
<body>
    <div class="container">
      <h1><i> Login </i></h1>
      <form action="" method="POST" >
		 <div class="ip1">
			<input type="text" name="username" placeholder="Nhập email or username" size="35px">
		</div>
        <br>
		<div class="ip2">
			<input type="text" name="password" placeholder="Nhập password" size="35px"></td>
		</div>
        <br>
		<div class="ip3">
			<input  type="submit" name="login" value="login" ></input>
            <br>
            <a href="dangxuat.php"><input type="submit" name="Log out"value="Logout"></input></a>
        </div>   
</form>
</div>
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
  echo"Kết nối thành công";
 }
 //Hàm isset để kiểm tra xem có click button login ko?
 if(isset($_POST['login']))
 {
 // Lấy dữ liệu được nhập từ form , kiểm tra so với dữ liệu ở database
 $username = $_POST['username'];
 $password = $_POST['password'];
 // chọn trong bảng users, dòng nào có username = $username và password = $password
 $sql="SELECT * FROM user WHERE username ='$username' AND password ='$password'";
// Dùng hàm mysqli_query để thực thi truy vấn từ cơ sở dữ liệu và trả về kết quả
 $result = mysqli_query($connect, $sql);
 $row_user=mysqli_fetch_array($result);
 // Trả kết quả các hàng trong bảng được truy vấn --> dùng hàm //mysqli_num_row($result)
 $check_login = mysqli_num_rows($result);
 // Nếu tìm thấy kết quả, tức là tìm thấy trong các hàng có username = $username và password = $password ---> check_login > 0
 if($check_login>0){
  echo"<script>alter('login successfully !')</script>";
  echo "<script>window.open('trangtru.php','_self')</script>";
  $_SESSION['username']=$username;
  $_SESSION['user_id']=$row_user['user_id'];
  echo $_SESSION['username'];
 }
 else{
  echo"errol username or password";
 }
}

 ?>

</body>
</html>