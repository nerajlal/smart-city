<?php
include('shead.php');
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
                  <h3><span></span></h3><br><br><br><br><br><br>
                  <table border='2'>
                    <tr>
                        <td>Name</td>
                        <td>Product</td>
                        <td>Quantity</td>
                        <td>Price</td>
                        <td>Address</td>
                        <td>Phone</td>
                        <td>Status</td>
                        <td>Deliver</td>
                        <td>Deliver</td>
                    </tr>
<?php
session_start();
 $uname=$_SESSION['email']; 
                  $q="SELECT * fROM purchase where shop='$uname' and status='0'||status='1'||status='2'";
                  $m=mysql_query($q,$conn);
                  while($r=mysql_fetch_assoc($m))
                    {
                      $id=$r['id'];
                      $name=$r['name'];
                      $user=$r['user'];
                      $shop=$r['shop'];
                      $address=$r['address'];
                      $phone=$r['phone'];
                      $product=$r['product'];
                      $quantity=$r['quantity'];
                      $price=$r['price'];
                      $status=$r['status'];
?>
                    <tr>
                      
                        <td><?php echo $name; ?></td>
                        <td><?php echo $product; ?></td>
                        <td><?php echo $quantity; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php
                        if($status==0)
                          echo 'Ordered';
                        else if($status==1)
                          echo 'Out for delivery';
                        else if($status==2)
                          echo 'Delivered';
                        else if($status==4)
                          echo 'Order Cancelled';
                        ?>
                      </td>
                      <td><a href="deliver.php?id=<?php echo $id?>" style="color:#0ef90e"> Out For Delivery</a></td>
                      <td><a href="delivered.php?id=<?php echo $id?>" style="color:#0ef9f0"> Delivered</a></td></tr>
                  
<?php
}
?>
</table>


