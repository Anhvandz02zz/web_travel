
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>kaka</title>
  <style type="text/css">
    .huhu{
       
        background-color: mediumseagreen;
        width: 400px;
        height: 500px;
        margin-top: 40px;
        text-align: center;
        margin-left: 35%;
        padding: 20px;
    }
    body{
        text-align: center;
        background-color:  #50c7c7;
    }
     .ip1 input{
       border: 1px solid silver;
        height: 30px;
        margin-top: 30px;

     }
     .ip2 input{
        border: 1px solid silver;
        height: 30px;
        
     }
     .ip3 input{
        border: 1px solid silver;
        height: 30px;
        
     }
    .ip4 input{
      
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
  <div class="huhu">
    <h1><i>Registration</i></h1>
	<form action="#" method="POST">		
  	           <div class="ip1">
                <input type="text" name="username" placeholder="Username..." size="35px">
              </div>
              <br>
              <div class="ip2">
				       <input type="text" name="password" placeholder="Passwod..." size="35px">
			        </div>
              <br>
              <div class="ip3">
		    	    <input type="text" name="fullname"placeholder=" fullname" size="35px">
		          </div>
              <br>
              <div class="ip4">
		    	    <input type="submit" value ="register" name="register">
              </div>    
    </form>
  </div>
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
  echo"Kết nối thành công";
 }
  if(isset($_POST['register'])) { 
    $username =$_POST['username'];
    $password =$_POST['password'];
    $fullname =$_POST['fullname'];
    $sql="INSERT INTO user values (NULL,'$username','$password','$fullname')";
    $result = mysqli_query($connect,$sql);
    if ($result) {
      echo "<script>alert('Account has been created successfully!')</script>";
      echo "<script>window.open('trangtru.php','_self')</script>";
    }
    else{
      echo"<script>alert('Error')</script>";
    }  
  }
     ?>
	
  
</body>
</html>