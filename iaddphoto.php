<?php
include('ihead.php');
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
	<b><u><h1 style="color: white">ADD PHOTOS</h1></u></b><br><br>
<form method="POST" enctype="multipart/form-data">
	<table>
<!-- 		<td>City</td><td><input type="text" name="city" class="form-control"  style="margin-bottom: 8px;margin-left: 8px"></td>
		</tr>
		<tr>
			<td>Product Name</td><td><input type="text" name="name" class="form-control" style="margin-bottom: 8px;margin-left: 8px"></td>
		</tr>
		<tr>
			<td>Quantity</td><td><input type="text" name="quantity" class="form-control"  style="margin-bottom: 8px;margin-left: 8px"></td>
		</tr>
		<tr>
			<td>Price</td><td><input type="text" name="price" class="form-control"  style="margin-bottom: 8px;margin-left: 8px"></td>
		</tr> -->
		<tr>
			 <tr><td><input type="file" name="photo" required> </td><td>
        <input type="submit" name="submit" value="SUBMIT"></td></tr>







                     <?php


session_start();
    $email=$_SESSION['email']; 
    //echo "$email";




if(isset($_POST['submit'])){
	 $target_dir = "pic/";
    $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        //echo "The file ". htmlspecialchars(basename( $_FILES["photo"]["name"])). " has been uploaded.";
   } else {
        echo "Sorry, there was an error uploading your file.";
    }

   
	$q="INSERT into picture(username,file) values('$email','$target_file')";
    if(mysql_query($q,$conn))
    {
        echo "<script>alert('Photo Added!');
                           
                    </script>";

    }
    else{
         echo "<script>alert('Can't Add Product!');
                            location.href='iaddphoto.php';
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


       <!-- <div class="scroll_indicator_wrapper"> 
          <a href="#about" class="scroll_indicator scroll_down" data-scroll-goto="1"></a> 
      </div> -->
</section > 
