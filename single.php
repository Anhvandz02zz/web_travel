<?php 
require_once("connect.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>kaka</title>
</head>
<body>
	
    <div>
 <div>
    <?php 
    $id=$_GET["id"];
    $sql="SELECT * FROM product WHERE produc_id={$id} ";
    $result= mysqli_query($connect,$sql);
    while ($row=mysqli_fetch_assoc($result)) {
     ?>
      <div style="float:left">
          <img src="Image/<?php echo $row['product_img']?>" style="width: 200px;height: 200px" >
        </div>
        <div style=" text-align: left;">
        <h2 >Name Of Product: <?php echo $row['product_name'] ?></h2>
        <p style="color: red;padding-left: 20px;"> Price: <?php echo $row['price']; ?></p>
     
        <p>100% hàng chất lượng đảm bảo <strong>uy tín!</strong></p>
        <br>
        <br>
         <form method="POST" action="cart.php"> 
            <input type="number" name="sl" value="1" min="1" max="10" style="display: none;"> 
            <input type="hidden" name="id" value="<?=$id?>">          
            <a href='cart.php?add_cart=$produc_id'>
         <button>Add to cart</button><a>
           

          </form>

         <br>
          <br>          
        <div style="border-bottom: 1px solid black"></div>
        <br>
        <h2>
          Basic product info:
        </h2>               
        
        </div>       

        <?php
      }
      ?>
      
     </div>
     </div>
</body>
</html>