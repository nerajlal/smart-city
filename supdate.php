  <?php
include('shead.php');
include('dbconnect.php');
$id=$_GET['id'];
?>

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
                  
<br><br>

       <?php
       session_start();
              //$uname=$_GET['id'];
              $uname=$_SESSION['email']; 
                  $q="SELECT * fROM product where id=$id";
                  $m=mysql_query($q,$conn);
                  while($r=mysql_fetch_assoc($m))
                    {
?>            
<center>
  <b><u><h1 style="color: white">EDIT PRODUCT</h1></u></b><br><br>
<form method="POST">
  <table>
    <td>City</td><td><input type="text" name="city" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" placeholder="<?php echo $r['city']  ?>" required></td>
    </tr>
    <!-- <tr>
      <td>Product Name</td><td><input type="text" name="name" class="form-control" style="margin-bottom: 8px;margin-left: 8px" placeholder="<?php echo $r['product']  ?>" required></td>
    </tr> -->
    <tr>
      <td>Quantity</td><td><input type="text" name="quantity" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" placeholder="<?php echo $r['quantity']  ?>" required></td>
    </tr>
    <tr>
      <td>Price/Kg</td><td><input type="text" name="price" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" placeholder="<?php echo $r['price']  ?>" required></td>
    </tr>
    <tr>
       <!-- <tr><td><input type="file" name="photo" required> </td> -->
        <td><input type="submit" name="submit" value="SUBMIT" style="background: green;"></td></tr>
      </tr>
    </table>
<?php

             }
             ?>
  </form>
  </center></div>


<?php
 
                                 
if(isset($_POST['submit'])){

  $city=$_POST['city'];
  $quantity=$_POST['quantity'];
  $price=$_POST['price'];
 

  $q="update product set city='$city',quantity='$quantity',price=$price where id=$id";
  //echo $q;
    if(mysql_query($q,$conn))
    {
        echo "<script>alert('Product Updated!');
                           
                    </script>";

    }
    else{
         echo "<script>alert('Can't Update Product!');
                            location.href='smyproduct.php';
                    </script>";
    }



}

                     ?>

