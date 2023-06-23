<?php
include('uhead.php');
 include('dbconnect.php');
?>
<html>
<head><title>store</title>
  <style>
/* CSS styles */
.search-container {
  position: relative;
  display: inline-block;
}

input[type="text"] {
  padding: 10px 20px;
  border-radius: 30px;
  border: 2px solid #ccc;
  font-family: 'FontAwesome';
}

input[type="text"]::placeholder {
  font-family: 'FontAwesome';
}

button[type="submit"] {
  position: absolute;
  right: 0;
  top: 0;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 30px;
  cursor: pointer;
}
button[type="submit"]::before {
  content: "\f002";
  font-family: 'FontAwesome';
}
  </style>
</head>
<div id="sticky_header"></div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Wrapper ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 <div class="site_wrapper bg_white"> 
  <section id="home" class="section_scroll welcome_area" data-scroll-index="0"> 
        <div class="bg_overlay bg_image page_cover" style="background-image:url('image/smartcity.jpg')"></div>
            <div id="particles-js"></div>
            <div class="home_wrapper_info"> 
              <div class="container"> <div class="row justify-content-center"> 
                <div class="col-lg-12">
                 <div class="home_text_block text-center">
                 
<form method="GET" action="">
    <div class="search-container">
    <input type="text" name="place" id="search" placeholder=" Place">
    <input type="text" name="search" id="search" placeholder=" Item...">
    <button type="submit">
      <span class="visually-hidden"></span>
    </button>
  </div>
  <?php
if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $place = $_GET['place'];
  $sql="select * from product where product='$search' and city='$place'";
                  $m=mysql_query($sql,$conn);
                           
                  while($r=mysql_fetch_array($m))
                    {
                  $id=$r['id'];
                  $type=$r['product'];
                  $name=$r['quantity'];
                  $phone=$r['price'];
                  $photo=$r['photo'];
                  $username=$r['username'];
                  ?>
                  <br>
<div class="col-md-6">
                <div class="product-item">
                  <?php $key=$r['product']?>
                  <!-- <a href="car-details.php?id=<?php echo $key?>"> -->
                    <img style="width: 490px; height: 250px;" src="<?php echo $r['photo']?>" alt="" ></a>
                  <div class="down-content">
                    <!-- <a href="car-details.php"><h4><?php echo $r['quantity']?> -->
                     <h4><?php echo $r['product']?></h4>
                     <h4><i class="fa fa-balance-scale"></i><?php echo $r['quantity']?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <i class="fa fa-money"></i><?php echo $r['price']?></h4>
                      <h4>
                        <!-- <a href="ubuy.php"><input type="submit" name="submited" value="BUY"></a></h4> -->
                    <button><a href="ubuy.php?id=<?php echo $id;?>">BUY</a></button>

                      <!--  <input type="submit" name="submit1" value="BUY">-->

                  <?php
                } 
}
?>


