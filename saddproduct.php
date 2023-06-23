<?php
include('shead.php');
include('dbconnect.php');
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
                  
<center>
	<b><u><h1 style="color: white">ADD PRODUCT</h1></u></b><br><br>
<form method="POST" enctype="multipart/form-data">
	<table>
		<td>City</td><td><input type="text" name="city" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Product Name</td><td><input type="text" name="name" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Quantity</td><td><input type="text" name="quantity" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Price/Kg</td><td><input type="text" name="price" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			 <tr><td><input type="file" name="photo" required> </td><td>
        <input type="submit" name="submit" value="SUBMIT"></td></tr>







                     <?php


session_start();
    $email=$_SESSION['email']; 
    //echo "$email";




if(isset($_POST['submit'])){
	 $target_dir = "product/";
    $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        //echo "The file ". htmlspecialchars(basename( $_FILES["photo"]["name"])). " has been uploaded.";
   } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $city=$_POST['city'];
	$name=$_POST['name'];
  $quantity=$_POST['quantity'];
	$price=$_POST['price'];
 



 
	$q="INSERT into product(username,city,product,quantity,price,photo) values('$email','$city','$name','$quantity','$price','$target_file')";
    if(mysql_query($q,$conn))
    {
        echo "<script>alert('Product Added!');
                           
                    </script>";

    }
    else{
         echo "<script>alert('Can't Add Product!');
                            location.href='saddproduct.php';
                    </script>";
    }



}

                     ?>
                   </ul> 

                </div>
              </div>
            </div>
          </div>
        </div>


       
</section > 
