  <?php
  include('dbconnect.php');
  include('admin_nav.php');
?>
   <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Add </h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>      
   



<center>
 <form method="POST" enctype="multipart/form-data">
  <table>
    <td>City</td><td><input type="text" name="city" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
    </tr>
    <tr>
      <td>Institution Type</td><td><input type="text" name="type" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td>
    </tr>
    <tr>
      <td>Institution Name</td><td><input type="text" name="name" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
    </tr>
    <tr>
     <td>Phone</td><td><input type="text" name="phno" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" pattern="(?=.*[0-9]).{10}" title="10 digit phone number" required></td>
    </tr>
    <tr>
       <tr><td>Photo</td><td><input type="file" name="photo" required> </td></tr>
       <tr><td></td></tr>
       <td><input type="submit" name="submit" value="SUBMIT"></td></tr>







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

    $city=$_POST['city'];
  $name=$_POST['name'];
  $type=$_POST['type'];
  $phone=$_POST['phone'];
 



 
  $q="INSERT into institution(city,institution_type,institution_name,phone,pic) values('$city','$type','$name','$phone','$target_file')";
    if(mysql_query($q,$conn))
    {
        echo "<script>alert(' Added!');
                           
                    </script>";

    }
    else{
         echo "<script>alert('Can't Add!');
                            location.href='add.php';
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


       <div class="scroll_indicator_wrapper"> 
          <a href="#about" class="scroll_indicator scroll_down" data-scroll-goto="1"></a> 
      </div>
</section > 
