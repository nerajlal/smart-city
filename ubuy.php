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
                  <h3><span></span></h3><br><br><br><br><br><br>
                  


<?php
session_start();
    $uname=$_SESSION['email']; 
$id=$_GET['id'];
//$quantity=$_POST['quantity'];

$q="SELECT * fROM product where id=$id";
//echo $q;
                  $m=mysql_query($q,$conn);
while($r=mysql_fetch_array($m))
                    {
                      $shop=$r['username'];
                      $city=$r['city'];
                      $product=$r['product'];
                      $price=$r['price'];
              }
              ?>
              <?php
if(isset($_POST['submit'])){

  $quantity=$_POST['quantity'];
  $name=$_POST['name'];
  //$price=$_POST['price'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $price1=$price*$quantity;
  
  $q="INSERT into purchase(name,user,shop,address,phone,product,quantity,price) values('$name','$uname','$shop','$address','$phone','$product','$quantity','$price1')";
  // echo $q;
  if(mysql_query($q,$conn))
  {
    
          echo "<script>alert('Product Ordered!');
              location.href='store.php';
          </script>";
        }
  }


?>


                  <form action="" method="POST">
                    Quantity:<input type="text" name="quantity" pattern="(?=.*[0-9]).{1,}" title="Only numbers are allowed" required><br>&nbsp;&nbsp;
                    Name:<input type="text" name="name" required><br>
                    Address:<input type="text" name="address" required><br>&nbsp;&nbsp;
                    Phone:<input type="text" name="phone" pattern="(?=.*[0-9]).{10}" title="10 digit phone number" required><br>&nbsp;&nbsp;&nbsp;&nbsp;
                    Price:<input type="text" name="price" placeholder="<?php echo $price ?>" readonly><br>
                     <input type='submit' name="submit" value="BUY">

                  </form>