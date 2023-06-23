<?php
	include('head.php');
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
	<b><u><h1 style="color: white">INSTITUTION REGISTRATION</h1></u></b><br><br>
<form method="POST" enctype="multipart/form-data" >
	<table>
		<tr>
			<td>City</td><td><input type="text" name="city" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Institution Type</td><td><input type="text" name="type" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Institution Name</td><td><input type="text" name="name" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Address</td><td><input type="text" name="address" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Phone</td><td><input type="text" name="phno" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" pattern="(?=.*[0-9]).{10}" title="10 digit phone number" required></td>
		</tr>
		<tr>
			<td>Email</td><td><input type="email" name="email" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Password </td><td><input type="text" name="password" class="form-control" style="margin-bottom: 8px;margin-left: 8px"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
					title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required
					></td>
		</tr>
		 <tr><td>Photo</td><td><input type="file" name="photo" required> </td></tr>
       <tr><td></td></tr>
		<tr>
			<td></td><td><input type="submit" name="submit" value="submit" class="btn btn-success" style="padding: 10px 25px"></td>
		</tr>

	</table>
	
</form>
</center>
</div>
</div>
</div>
</div>
</div>
</section>


<?php

if(isset($_POST['submit'])){

 $target_dir = "pic/";
    $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        //echo "The file ". htmlspecialchars(basename( $_FILES["photo"]["name"])). " has been uploaded.";
   } else {
        echo "Sorry, there was an error uploading your file.";
    }

	$city=$_POST['city'];
  $type=$_POST['type'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$phno=$_POST['phno'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$q="INSERT into login(email,password,user) values('$email','$password','institution')";
	// echo $q;
	if(mysql_query($q,$conn))
	{
		$id=0;
			$q1="select lid from login where email='$email' AND password='$password'";
			//echo $q1;
			$m=mysql_query($q1,$conn);
			while ($r=mysql_fetch_array($m)) {
				$id=$r['lid'];
			}

		$q2="INSERT INTO customer(name, email, city, address, phno, loginid) values('$name','$email','$city','$address','$phno','$id')";
				$n=mysql_query($q2,$conn);
				if($m&&$n){
					echo " ";
				}

			$q2="INSERT INTO institution(city, institution_type, institution_name, phone,pic) values('$city','$type','$name','$phno','$target_file')";
				$n=mysql_query($q2,$conn);
				if($m&&$n){
					echo "<script>alert('Your account has been created!');
							location.href='login.php';
					</script>";
				}
	}



}

?>


