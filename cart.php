<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <center>
  <form method="post">
    <table border="1">
      <tr >
        <th >Product Name</th>
        <th >Images</th>
        <th >Prices</th>
        <th >Quantity</th>
        <th ></th>
      </tr>
      <?php   
      session_start();     
      include("connect.php");
      $user_id = $_SESSION['user_id'];
      $sql="select * from cart where user_id='$user_id'";
      $result = mysqli_query($connect, $sql);
      $check_user = mysqli_num_rows($result);
      if ($check_user == 0){
        echo "<tr>
        <td colspan='6'><h5>Your shopping cart is empty</h5></td>
        </tr>";
      }
      else {
        $sql = "SELECT cart_id, product_name, product_img, price, quantity from product, cart WHERE product.produc_id = cart.produc_id AND user_id='$user_id'";

        $result = mysqli_query($connect, $sql);
        while($row_cart =  mysqli_fetch_array($result)){
          $cart_id =$row_cart['cart_id']; 
                
          $cart_pro_name =$row_cart['product_name']; 
          $cart_pro_image =$row_cart['product_img']; 
          $cart_pro_price =$row_cart['price']; 
          $cart_pro_quantity =$row_cart['quantity'];    

          echo "
          <tr>
          <td ><a href='detail.php?product_id=$cart_id' >$cart_pro_name</a></td>
          <td class='col-md-2 col-sm-3 col-4'><img src='Image/$cart_pro_image' width='50' height='50' ></td>
          <td class='col-sm-2 col-2'><span>$</span>$cart_pro_price</td>
          <td class='col-md-3 col-sm-2 col-1' ><input type='text' name='Quantily' value='$cart_pro_quantity'></td>
          <td class='col-2'><a href='cart.php?delete_cart_pro=$cart_id'>Delete</a></td>
          </tr>
          ";
        }

      }
      ?>

    </table>
<?php 
    
    if (isset($_GET["delete_cart_pro"])) {  
      $cart_id = $_GET['delete_cart_pro'];
      $sql="delete from cart where cart_id =$cart_id";
      $result = mysqli_query($connect, $sql);
      if ($result) {
        echo "<script>window.open('cart.php','_self')</script>";
      }
      else {
        echo "<script>alert('Error')</script>";
        echo "<script>window.open('cart.php','_self')</script>";
      }
    }

   ?>

  </form>
  <h3 style="text-align: center;">Payment Information</h3>
  <form method="POST" action="thanhtoan.php" >
    <table>
      <tr>
        <td> UserName</td>
        <td> <input type="text" id="usr" name="name" value="<?php echo $_SESSION['username'];  ?>" readonly></td>
      </tr>
      <tr>
        <td> Select payment bank</td>
        <td><select class="custom-select" required id="bank" name="bank">
          <option selected></option>
          <option value="Vietcombank">Vietcombank</option>
          <option value="Techcombank">Techcombank</option>
          <option value="Airpay">Airpay</option>
          <option value="momo">momo</option>
        </select> </td>
      </tr>
      <tr>
        <td>Order Date </td>
        <td><input type="text" class="form-control" id="usr" name="date" value="<?php
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        echo "". date("d.m.Y h:i:sa");
      ?>" readonly> </td>
    </tr>
    <tr>
      <td> Total</td>
      <td> <input type="text" readonly name="total">
      </div></td>
    </tr>
    <tr>
      <td> <input type="submit" class="btn btn-success" value="Pay"></td>
    </tr>
  </table>


</form>
</center>
</body>
</html>