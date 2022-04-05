<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<div class="container">
  <h2>Quan Tri Nguoi Dung</h2>
            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>User_ID</th>
        <th>UserName</th>
        <th>Password</th>
        <th>Fullname</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php 
    include('connect.php');
    $sql="SELECT * FROM user";
    $result=mysqli_query($connect,$sql);
    while($row= mysqli_fetch_array($result)){
        $user_id = $row['user_id'];
        $username = $row['username'];
        $password = $row['password'];
        $fullname = $row['fullname'];
      ?>
    <tbody>
      <tr>
        <td><?php echo $user_id ?></td>
        <td><?php echo $username ?></td>
        <td><?php echo $password ?></td>
        <td><?php echo $fullname ?></td>
        <td> <a href="edituser.php?id=<?php echo $user_id ?>">Update User </a></td>
        <td> <a href="delete?id=<?php echo $user_id ?>">Delete User </a></td>
      </tr>
    
    </tbody>
   <?php
     }
    ?>
  </table>
</div>

</body>
</html>
