
 <?php
 include('connect.php') ;
 ?>

 <?php 
 if (isset($_GET['id'])) {
 	$id=$_GET['id'];
 }
 ?>

<?php 
 $sql= "SELECT * FROM user WHERE id = $id";
 $result= mysqli_query($sql);
 $rows= mysql_fetch_array($result);
?>
 <form action="" method="POST">
 	
 	<label>Usrname</label><input type="text" name="username" value="<?php echo $rows['username']; ?>">
 	<label>pass</label><input type="password" name="password"value="<?php echo $rows['password']; ?>">
 	<label>fullname</label><input type="text" name="fullname"value="<?php echo $rows['fullname']; ?>">
 	<input type="submit" name="sua" value="sua">

 </form>
