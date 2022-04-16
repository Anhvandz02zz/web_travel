<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Trủ</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
   <style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&display=swap');
:root {
  --main-font: 'Montserrat' , sans-serif;
}
*  {
  margin: 0;
  padding: 0;
  color: #333;
  font-family: var(--main-font);
}
li{
  list-style: none;
}

a{
text-decoration: none;
}
.menu{
  background-color: #9bc03c;
  padding: 5px;
  border: none;
  outline: none;
  
}
.address p{
  margin-left:80px ;
  color: white;

}
.sup-menu ul{
  margin-left: 300px;
}
.sup-menu li{
  display: inline;
  padding: 0px 20px;
  border-right: 1px solid white;  
  cursor: pointer;
}
.logo img{
  width: 200px;
  height: 200px;
  float: left;
  position: absolute;
  top: 40px;
  left: 100px;
  z-index: -1;

}
.search{
  float: right;
  margin-top: 20px;
  margin-right: 200px;
}
.search input{
  width: 300px;
  border-radius:10px;
  height: 40px;
}
.search button{
  border: 10px 10px 5px;
 color: white;
 background-color: green;
 border-radius:15px;
 height: 40px;
 width: 60px;
 margin-top: 10px;
 cursor: pointer;
 box-shadow: 1px 2px 5px #000000;
}
.menu2{
margin-top: 70px;
background-color: tomato;
width: 90%;
margin-left: 100px;
padding: 7px;
color: white;
}
.sup-menu2 ul li {
  display: inline;
  padding: 10px 20px;
  
}
.sup-menu22 li{
display: inline;
padding: 20px;
}
.content img{
  width: 100%;
  height: 50%;
}
.button{
min-height: 30px;
   border: none;
  outline: none;
  cursor: pointer;
  background-color: green;
  color: white;
  width: 80px;
  border-radius: 10px;
}
.button:hover{
  background-color: tomato;
}
.product{
  margin-left: 20px;
}
.product .product-item{
  justify-content: space-around;
display: flex;
flex-wrap: wrap;  
}
.product-item-li{
  border: 1px solid black;
  margin-top: 5px;
}
.product-item-li p{
  text-align: center;
}
.product-item-li p button{
  background-color: tomato;
  min-height: 25px;
  box-sizing: border-box;
  border-radius: 10px;
}
.product-item-li p button:hover{
  color: white;
}


 </style>

</head>
<body>
<div class="menu">
    <div class="container-fluid">
          <div class="row">
            <div class="address">
            <div class="col-md-4 col-xs-4 col-sm-4">
                <p> <i class="fas fa-location-arrow"></i>An Tâm , Bình Lục , Hà Nam</p>               
            </div>
            </div>
            <div class="sup-menu">
            <div class="col-md-8 col-xs-4 col-sm-8">
            <ul>             
                 <li class="active"><a href=""> Yêu Thích</li>
                 <li><i class="fas fa-male"></i><a href="login.php">Đăng Nhập</li>
                 <li><a href="signup.php">Đăng Kí</li>
                 <li><i class="fas fa-shopping-cart"></i><a href="cart.php">Gio Hàng</li>
            </ul>
            </div>   
           </div>
          </div>
    </div>
</div>

<div class="menu1">
  <div class="container-fluid">
     <div class="logo">
       <img src="Image/logo.jpg">
     </div>
     <div class="search">
        <input type="text" name=" " placeholder="Tim kiem...">
       <button type="Submit">Search</button>
     </div>
  </div>

<div class="menu2">
  <div class="container-fluid">
    <div class="row">
    <div class="sup-menu2">
      <div class="col-md-8">
      <ul >
        <li><a href="">Trang Trủ</li>
          <li><a href="">Gioi Thiệu</li>
            <li><a href="add_product.php">Sản Phẩm</li>
              <li><a href="">Tin Tức</li>
                <li><a href="">liên Hệ</li>
                  
                    <li><a href="logout.php"></a></li>
      </ul>
    </div>
    </div>
      <div class="sup-menu22">
        <ul>
          <li><i class="fas fa-phone-alt"></i>0941126321</li>
          <li>|</li>
          <li><i class="fas fa-blender-phone"></i>18008080</li>
        </ul>
      </div>
  </div>
  </div>
</div>

  <h2 style="text-align: center;">Các loại sản phẩm</h2>  


<div class="product">
    <ul class="product-item">
      <li class="product-item-li">
        <img style="width: 250px;height: 250px;" src="https://i-giadinh.vnecdn.net/2020/10/02/1a-1601625636-1601625649-2142-8981-3585-1601635885_680x0.jpg">
        <p>Name:Oto</p>
        <p>Gía:420.00</p>
        <p><button>Thêm giỏ hàng</button></p>
      </li>
      <li class="product-item-li">
        <img style="width: 250px;height: 250px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjvtRWr0vjRfDFxDuhpjS7xhsEE5nlFZTaB2GZDWeHxWyEyB2j5t-4im67IDs2D5mN7GM&usqp=CAU">
        <p>Name:Xe cho hang</p>
        <p>Gía:320.000</p>
        <p><button>Thêm giỏ hàng</button></p>
      </li>
      <li class="product-item-li">
        <img style="width: 250px;height: 250px;" src="https://longthuy.vn/wp-content/uploads/2018/08/52305424_23843197722980749_6216029017003261952_n.png">
        <p>Name:Gấu bông</p>
        <p>Gía:180.000d</p>
        <p><button>Thêm giỏ hàng</button></p>
      </li>
      <li class="product-item-li">
        <img style="width: 250px;height: 250px;" src="https://gotrangtri.vn/wp-content/uploads/2019/12/do-choi-tre-em-14.jpg">
        <p>Name:Xếp Hình</p>
        <p>Gía:420.000đ</p>
        <p><button>Thêm giỏ hàng</button></p>
      </li>
      <li class="product-item-li">
        <img style="width: 250px;height: 250px;" src="https://channel.mediacdn.vn/prupload/156/2018/04/img20180426144802904.jpg">
        <p>Name:Lego</p>
        <p>Gía:1.200.000</p>
        <p><button>Thêm giỏ hàng</button></p>
      </li>
      <li class="product-item-li">
        <img style="width: 250px;height: 250px;" src="https://gocyeube.com/wp-content/uploads/2021/09/do-choi-mat-san-mam-non-min.jpg">
        <p>Name:Hình dán</p>
        <p>Gía:320.000đ</p>
        <p><button>Thêm giỏ hàng</button></p>
      </li>
      <li class="product-item-li">
        <img style="width: 250px;height: 250px;" src="https://inhat.vn/hcm/wp-content/uploads/2019/08/baby-cua-toi.jpg">
        <p>Name:Đồ chơi</p>
        <p>Gía:420.000đ</p>
        <p><button>Thêm giỏ hàng</button></p>
      </li>
      <li class="product-item-li">
        <img style="width: 250px;height: 250px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4aiOitXA-krEuXDKSj-itHizgmy-P5U54gC9RTxOBZz-3c8vfDq4Ba7pwmTlZ9_oHmP4&usqp=CAU">
        <p>Name:Đồ xếp Hình</p>
        <p>Gía:180.000đ</p>
        <p><button>Thêm giỏ hàng</button></p>
      </li>
      <li class="product-item-li">
        <img style="width: 250px;height: 250px;" src="https://i-giadinh.vnecdn.net/2020/10/02/1a-1601625636-1601625649-2142-8981-3585-1601635885_680x0.jpg">
        <p>Name:Đồ chơi</p>
        <p>Gía:420đ</p>
        <p><button>Thêm giỏ hàng</button></p>
      </li>
      <li class="product-item-li">
        <img style="width: 250px;height: 250px;" src="https://i-giadinh.vnecdn.net/2020/10/02/1a-1601625636-1601625649-2142-8981-3585-1601635885_680x0.jpg">
        <p>Name:Đồ chơi</p>
        <p>Gía:420đ</p>
        <p><button>Thêm giỏ hàng</button></p>
      </li>
      
    </ul>

   </div>
</body>
</html>