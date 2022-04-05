<?php 
	include("connect.php");
	if (isset($_GET["add_cart"])) {	
		//dùng biến để lấy dữ liệu từ trang chủ 
		$produc_id = $_GET['add_cart'];
		//Trong trang login đã có biến $_SESSION để lưu lại tên đăng nhập
		if (isset($_SESSION['username']) && $_SESSION['username'] != null){
			$user_id = $_SESSION['user_id'];
			$sql="SELECT * FROM cart where produc_id = $produc_id AND user_id='$user_id'";
			$result = mysqli_query($connect, $sql);
			$check_product = mysqli_num_rows($result);
			//Nếu sản phẩm đã có trong giỏ hàng thì đưa ra thông báo
			if ($check_product > 0) {
				echo "<script>alert('Products already in the cart')</script>";
				echo "<script>window.open('trangtru.php','_self')</script>";
			}
			else {
				$sql = "INSERT into cart values ('', $produc_id, '$user_id',1 ) ";
				$result = mysqli_query($connect, $sql);	
				if ($result) {
					echo "<script>alert('Product added to the cart successfully!')</script>";
					echo "<script>window.open('trangtru.php','_self')</script>";
				}
				else {
					echo "<script>alert('Error')</script>";
					echo "<script>window.open('trangtru.php','_self')</script>";
				}
			}
		}
		else {
			echo "<script>alert('You need to be logged in to perform this action')</script>";
			echo "<script>window.open('login.php','_self')</script>";
		}
	}					
?>