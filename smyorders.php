<?php
include('uhead.php');
 include('dbconnect.php');
?>
<html>
<head>
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
                  <h3><span></span></h3>
<form method="POST" action="">
    <div class="search-container">
    
  </div>
   <table border="2">
    <tr>
      <td>Product</td>
      <td>Quantity</td>
      <td>Price</td>
      <td>Status</td>
      <td>Action</td>
    </tr>
<?php
session_start();
              $uname=$_SESSION['email']; 
  $sql="select * from purchase where user='$uname'";
                  $m=mysql_query($sql,$conn);
                           
                  while($r=mysql_fetch_array($m))
                    {
                  $id=$r['id'];
                  $shop=$r['shop'];
                  $product=$r['product'];
                  $quantity=$r['quantity'];
                  $price=$r['price'];
                  $status=$r['status'];
                  ?>
                  <br>

                    <tr>
                      <td><?php echo $product ?></td>
                      <td><?php echo $quantity ?></td>
                      <td><?php echo $price ?></td>
                      <td><?php 
                            if($status==0)
                              echo 'Not Delivered';
                            else if($status==1)
                              echo 'Out For Delivery';
                            else if($status==2)
                              echo 'Delivered';
                            
                            else if($status==4)
                              echo 'Order Cancelled';

                       ?></td>
                     <td><input type="submit" name="submit" value="Cancel Order">
                     </tr>
                


                  <?php
                } 

?>
  </table>
<?php

if(isset($_POST['submit'])){
 
  $q="update purchase set status='4' where id=$id";
  // echo $q;
  if(mysql_query($q,$conn))
  {
          echo "<script>alert('Item Cancelled!');
              location.href='smyorders.php';
          </script>";
        }
  }
?>