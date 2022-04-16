<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>adđ</title>
   <style type="text/css">
   body{
      background: #696969;
      
   }
   body h1{
   text-align: center; 
   font-style: italic;
   }
    .huhu{
      width:50% ;
      height: 500px;
      border: 1px solid black;
      margin-left: 22%;
      color: white;
   }
     
   </style>
</head>
<body>
<h1>Thêm sản phẩm </h1>
<form action="" method="post" enctype="multipart/form-data">
<div class="huhu">  
   <table align="center" >      
     <tr>
   <td colspan="7">
   <h2>Add Product</h2>
   <div class="border_bottom"></div>
   </td>
     </tr>
 

<tr>
     <tr>
   <td><b>Product Name:</b></td>
   <td><input type="text" name="product_name" size="30px" required/></td>
    </tr>
     <tr>
  <td><b>Product Image: </b></td>
  <td><input type="file" name="product_img" /></td>
</tr>

<tr>
  <td><b>Product Price: </b></td>
  <td><input type="text" name="price" required/></td>
</tr>

   <td></td>
   <td colspan="7"><input type="submit" name="insert_post" value="Add Product"/></td>
</tr>
   </table>
</div>
   
</form>
<?php
include("connect.php");
if(isset($_POST['insert_post'])){
    $product_img= $_POST['product_img'];
    $product_name = $_POST['product_name'];
   
    $price = $_POST['price'];  
    $sql = "INSERT INTO product VALUES (NULL,'$product_img','$product_name','$price')";
   $insert_pro = mysqli_query($connect, $sql);
   
   if($insert_pro){
    echo "<script>alert('Product Has Been inserted successfully!')</script>";

echo "<script>window.open('index.php','_self')</script>";
   }
   
   }
?>
</body>
</html>